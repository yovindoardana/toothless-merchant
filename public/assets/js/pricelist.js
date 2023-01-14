const showPricelist = (id, api_code) => {
	// console.log(api_code);
	var settings = {
		url: 'http://127.0.0.1:8000/api/api-game',
		method: 'GET',
		timeout: 0,
	};

	$.ajax(settings).done(function (response) {
		// console.log(api_code);
		// console.log(`#priceColumn${id}`);
		// console.log(response.game.data);
		$(`#priceColumn${id}`).empty();
		let select = ``;
		$.map(response.game.data, (v, i) => {
			if (v.status == 'available' && v.game == api_code) {
				let priceFix = Math.round((v.price.basic * 110) / 100);
				select += `<option class="text-dark" value="${v.code}">${v.name} - Rp. ${priceFix}</option>`;
			}
			// console.log(v.game)
		});
		$(`#priceColumn${id}`).append(select);
	});
};

const selectPrice = (id) => {
	let selectedPrice = $(`#priceColumn${id}`).val();
	// console.log(selectedPrice);

	var settings = {
		url: 'http://127.0.0.1:8000/api/api-game',
		method: 'GET',
		timeout: 0,
	};

	$.ajax(settings).done(function (response) {
		$.map(response.game.data, (v, i) => {
			if (v.code == selectedPrice) {
				let priceFix = Math.round((v.price.basic * 110) / 100);
				$(`#price${id}`).val(priceFix);
				// console.log(priceFix);
			}
		});
	});
};
