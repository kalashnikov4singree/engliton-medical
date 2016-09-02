function change() {

	var uri_indication = {
		cpc : 'utm_term=adwords'
	};

	var phones = {
		cpc : '(877) 277-8886',
		search : '(877) 558-5951'
	};

	var newSours = false;
	// var urlParams = window.location.search;
	var urlParams = window.location.pathname + window.location.search;

	var source = getCookie('source_type');

	if(!newSours) {
		for (var name in uri_indication) {
			if (urlParams.indexOf(uri_indication[name]) != -1) {
				newSours = name;
				break;
			}
		}
	}

	if(!newSours && !source) {
		var referrer = document.referrer;
		if ( referrer.indexOf('yandex.ru/yandsearch') != -1
			|| referrer.indexOf('www.google.') != -1
			|| referrer.indexOf('go.mail.ru/search') != -1
			|| referrer.indexOf('nova.rambler.ru/search') != -1
			|| referrer.indexOf('bing.com/search') != -1
			|| referrer.indexOf('ask.com/web?q=') != -1
			|| referrer.indexOf('search.yahoo.com/search') != -1 )
		{
			newSours = 'search';
		}
	}

	if (newSours && newSours != source) {
		var options = {
			path : '/',
			expires : new Date(new Date().setFullYear(new Date().getFullYear() + 1))
		};
		setCookie( "source_type", newSours, options);
		source = newSours;
	}

	if (source){
		var phone = phones[source];

		if ( phone ) {
			var x = document.getElementsByClassName('phone_container');
			var i;
			for (i = 0; i < x.length; i++) {
				x[i].textContent = phone;
				if (x[i].getAttribute('href')) {
					x[i].setAttribute('href', 'tel:' +18775574145);
				}
			}
		}
	}

}

function getCookie(name) {
	var matches = document.cookie.match(new RegExp(
		"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
	));
	return matches ? decodeURIComponent(matches[1]) : undefined;
}

function setCookie(name, value, options) {
	options = options || {};

	var expires = options.expires;

	if (typeof expires == "number" && expires) {
		var d = new Date();
		d.setTime(d.getTime() + expires * 1000);
		expires = options.expires = d;
	}
	if (expires && expires.toUTCString) {
		options.expires = expires.toUTCString();
	}

	value = encodeURIComponent(value);

	var updatedCookie = name + "=" + value;

	for (var propName in options) {
		updatedCookie += "; " + propName;
		var propValue = options[propName];
		if (propValue !== true) {
			updatedCookie += "=" + propValue;
		}
	}

	document.cookie = updatedCookie;
}

document.addEventListener("DOMContentLoaded", change);