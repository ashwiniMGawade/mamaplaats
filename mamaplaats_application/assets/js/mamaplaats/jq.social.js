$(function(){
	Socialite.load($('#socialite'));
	Socialite.setup({
		facebook: {
			lang     : 'nl_NL',
			appId    : 198459770232050,
			onlike   : function(url) {
				_gaq.push(['_trackSocial', 'facebook', 'like']);
			},
			onunlike : function(url) {
				_gaq.push(['_trackSocial', 'facebook', 'unlike']);
			}
		},
		twitter: {
			lang     : 'nl',
			onclick  : function(e) {
				_gaq.push(['_trackSocial', 'twitter', 'tweet']);
			}
		},
		googleplus: {
			lang     : 'nl-NL'
		}
	});
});
