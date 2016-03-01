/**
 * Copyright (C) 2012 Chris Wharton (chris@weare2ndfloor.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * THIS SOFTWARE AND DOCUMENTATION IS PROVIDED "AS IS," AND COPYRIGHT
 * HOLDERS MAKE NO REPRESENTATIONS OR WARRANTIES, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO, WARRANTIES OF MERCHANTABILITY OR
 * FITNESS FOR ANY PARTICULAR PURPOSE OR THAT THE USE OF THE SOFTWARE
 * OR DOCUMENTATION WILL NOT INFRINGE ANY THIRD PARTY PATENTS,
 * COPYRIGHTS, TRADEMARKS OR OTHER RIGHTS.COPYRIGHT HOLDERS WILL NOT
 * BE LIABLE FOR ANY DIRECT, INDIRECT, SPECIAL OR CONSEQUENTIAL
 * DAMAGES ARISING OUT OF ANY USE OF THE SOFTWARE OR DOCUMENTATION.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://gnu.org/licenses/>.
 
 Documentation available at http://cookiecuttr.com
 
 */
(function ($) {
    $.cookieCuttr = function (options) {

        var defaults = {
            cookieCutter: false, // you'd like to enable the div/section/span etc. hide feature? change this to true
            cookieAnalytics: true, // just using a simple analytics package? change this to bbctrue
            cookieDeclineButton: false, // this will disable non essential cookies
            cookieAcceptButton: true, // this will disable non essential cookies
            cookieResetButton: false,
            cookieOverlayEnabled: false,  // don't want a discreet toolbar? Fine, set this to true
            cookiePolicyLink: '/cookies-privacy-policy.php', // if applicable, enter the link to your privacy policy here...
            cookieMessage: 'We use cookies on this website, you can <a href="{{cookiePolicyLink}}" title="read about our cookies">read about them here</a>. To use the website as intended please...',
            cookieAnalyticsMessage: 'We use cookies to geo-target and track visitors to our website. By using our website you consent to usage of cookies to improve browsing experience.',
            cookieErrorMessage: "We\'re sorry, this feature places cookies in your browser and has been disabled. <br />To continue using this functionality, please",
            cookieWhatAreTheyLink: "/cookies-privacy-policy.php",
            cookieDisable: '',
            cookieExpires: 365,
            cookieAcceptButtonText: "HIDE THIS NOTICE",
            cookieDeclineButtonText: "DECLINE COOKIES",
            cookieResetButtonText: "RESET COOKIES FOR THIS WEBSITE",
            cookieWhatAreLinkText: "What are cookies?",
            cookieNotificationLocationBottom: true, // top or bottom - they are your only options, so true for bottom, false for top            
			cookiePolicyPage: false,            
			cookiePolicyPageMessage: 'Please read the information below and then choose from the following options',
			cookieDiscreetLink: false,
			cookieDiscreetLinkText: "Cookies?",
			cookieDiscreetPosition: "topleft" //options: topleft, topright, bottomleft, bottomright         


        };
        var options = $.extend(defaults, options);
        var message = defaults.cookieMessage.replace('{{cookiePolicyLink}}', defaults.cookiePolicyLink);


        defaults.cookieMessage = 'We use cookies on this website, you can <a href="' + defaults.cookiePolicyLink + '" title="read about our cookies">read about them here</a>. To use the website as intended please...';
        
        
        //convert options
        var cookiePolicyLinkIn = options.cookiePolicyLink;
        var cookieCutter = options.cookieCutter;
        var cookieAnalytics = options.cookieAnalytics; 
        var cookieDeclineButton = options.cookieDeclineButton; 
        var cookieAcceptButton = options.cookieAcceptButton;
        var cookieResetButton = options.cookieResetButton; 
        var cookieOverlayEnabled = options.cookieOverlayEnabled; 
        var cookiePolicyLink = options.cookiePolicyLink; 
        var cookieMessage = message;
        var cookieAnalyticsMessage = options.cookieAnalyticsMessage;
        var cookieErrorMessage = options.cookieErrorMessage;
        var cookieDisable = options.cookieDisable; 
        var cookieWhatAreTheyLink = options.cookieWhatAreTheyLink;
        var cookieExpires = options.cookieExpires;
        var cookieAcceptButtonText = options.cookieAcceptButtonText;
        var cookieDeclineButtonText = options.cookieDeclineButtonText;
        var cookieResetButtonText = options.cookieResetButtonText;
        var cookieWhatAreLinkText = options.cookieWhatAreLinkText;
        var cookieNotificationLocationBottom = options.cookieNotificationLocationBottom;
        var cookiePolicyPage = options.cookiePolicyPage;       
        var cookiePolicyPageMessage = options.cookiePolicyPageMessage;       
        var cookieDiscreetLink = options.cookieDiscreetLink;
        var cookieDiscreetLinkText = options.cookieDiscreetLinkText;
        var cookieDiscreetPosition = options.cookieDiscreetPosition; 
		
        // cookie identifier
        var $cookieAccepted = $.cookie('cc_cookie_accept') == "cc_cookie_accept";
        $.cookieAccepted = function () {
            return $cookieAccepted;
        };

        var $cookieDeclined = $.cookie('cc_cookie_decline') == "cc_cookie_decline";
        $.cookieDeclined = function () {
            return $cookieDeclined;
        };


        if (($cookieAccepted) || ($cookieDeclined)) {
			// write cookie reset button
			 if(cookieResetButton) {
			 	$('body').prepend('<div class="cc-cookies"><a href="#" class="cc-cookie-reset">'+cookieResetButtonText+'</a></div>');
			 } else {
			     var cookieResetButton = "";
			 }            
        } else {
            // write cookie accept button
            if (cookieAcceptButton) {
                var cookieAccept = ' <a href="#accept" class="cc-cookie-accept">'+cookieAcceptButtonText+'</a> ';
            } else {
                var cookieAccept = "";
            }
            // write cookie decline button
            if (cookieDeclineButton) {
                var cookieDecline = ' <a href="#decline" class="cc-cookie-decline">'+cookieDeclineButtonText+'</a> ';
            } else {
                var cookieDecline = "";
            }
            
            // write extra class for overlay
            if (cookieOverlayEnabled) {
                var cookieOverlay = 'cc-overlay';
            } else {
                var cookieOverlay = "";
            }
            
            

            // add message to just after opening body tag
            
            if ( (cookieDiscreetLink) && (!cookiePolicyPage) ) { // show discreet link
            	
                $('body').prepend('<div class="cc-cookies cc-discreet"><a href="' + cookiePolicyLinkIn + '" title="'+ cookieDiscreetLinkText +'">'+cookieDiscreetLinkText+'</a></div>');
                //add appropriate CSS depending on position chosen
                if (cookieDiscreetPosition == "topleft") {
                	$('div.cc-cookies').css("top", "0");
                	$('div.cc-cookies').css("left", "0");
                }
                if (cookieDiscreetPosition == "topright") {
                	$('div.cc-cookies').css("top", "0");
                	$('div.cc-cookies').css("right", "0");
                }
                if (cookieDiscreetPosition == "bottomleft") {
                	$('div.cc-cookies').css("bottom", "0");
                	$('div.cc-cookies').css("left", "0");
                }
                if (cookieDiscreetPosition == "bottomright") {
                	$('div.cc-cookies').css("bottom", "0");
                	$('div.cc-cookies').css("right", "0");
                }
            
            } else if (cookieAnalytics) { // show analytics overlay
                $('body').prepend('<div class="cc-cookies ' + cookieOverlay + '">' + cookieAnalyticsMessage + cookieAccept + cookieDecline + '<a href="' + cookieWhatAreTheyLink + '" title="Visit All about cookies (External link)">'+cookieWhatAreLinkText+'</a></div>');
            } 
            if (cookiePolicyPage) { // show policy page overlay
                $('body').prepend('<div class="cc-cookies ' + cookieOverlay + '">' + cookiePolicyPageMessage + " " + cookieAccept + cookieDecline + '</div>');
            } else if ((!cookieAnalytics) && (!cookieDiscreetLink) ) { // show privacy policy option
                $('body').prepend('<div class="cc-cookies ' + cookieOverlay + '">' + cookieMessage + cookieAccept + cookieDecline + '</div>');
            }
            if (cookieCutter) {
                $(cookieDisable).html('<div class="cc-cookies-error">' + cookieErrorMessage + cookieAccept +'</div>');
            }
        }
        
        // if bottom is true, switch div to bottom
        if(cookieNotificationLocationBottom) {
        	$('div.cc-cookies').css("top", "auto");
        	$('div.cc-cookies').css("bottom", "0");
        }

        // setting the cookies
        $('.cc-cookie-accept, .cc-cookie-decline').click(function (e) {
            e.preventDefault();
            if ($(this).is('[href$=#decline]')) {
                $.cookie("cc_cookie_decline", "cc_cookie_decline", {
                    expires: cookieExpires,
                    path: '/'
                });
            } else {
                $.cookie("cc_cookie_accept", "cc_cookie_accept", {
                    expires: cookieExpires,
                    path: '/'
                });
            }
            $(".cc-cookies").fadeOut(function () {
                // reload page to activate cookies
               // location.reload();
            });

        });
        
        //reset cookies
        $('a.cc-cookie-reset').click(function(f) {
        	f.preventDefault();
        	$.cookie("cc_cookie_accept", null, {
        	    path: '/'
        	});
        	$.cookie("cc_cookie_decline", null, {
        	    path: '/'
        	});
        	$(".cc-cookies").fadeOut(function () {
        	    // reload page to activate cookies
        	    location.reload();
        	});
        });

    };
})(jQuery);