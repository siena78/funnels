var domain = document.location.protocol+'//'+document.location.host+'/';
var match = domain.match(/(?:https?:\/\/)?(?:www\.)?(.*?)\//);
var crossDomain = match[match.length-1];

function getParameterByName (name) {
	name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
	var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
	var results = regex.exec(location.search);
	return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

var arrQueryString = [];

//Enter QueryString to Array
if (getParameterByName('offerID')) arrQueryString['offerID'] = getParameterByName('offerID');
if (getParameterByName('offer_id')) arrQueryString['offerID'] = getParameterByName('offer_id');
if (getParameterByName('brokerID')) arrQueryString['brokerID'] = getParameterByName('brokerID');
if (getParameterByName('broker_id')) arrQueryString['brokerID'] = getParameterByName('broker_id');
if (getParameterByName('clickid')) arrQueryString['p'] = getParameterByName('clickid');
if (getParameterByName('clickID')) arrQueryString['p'] = getParameterByName('clickID');
if (getParameterByName('ClickID')) arrQueryString['p'] = getParameterByName('ClickID');
if (getParameterByName('p')) arrQueryString['p'] = getParameterByName('p');
for(i=1;i<=5;i++) if (getParameterByName('p'+i)) arrQueryString['p'+i] = getParameterByName('p'+i);

for (key in arrQueryString) {
	item = arrQueryString[key];
	if (item.length > 0 && item != "") crtCookie(key,item);
}

function crtCookie(name,value) {
	var days = 30;
	if (name.length < 1 || value.length < 1)
		return;
	var expires = "";
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		expires = "; expires="+date.toUTCString();
	}
	document.cookie = name+"="+value+expires+"; domain="+crossDomain+"; path=/";
}