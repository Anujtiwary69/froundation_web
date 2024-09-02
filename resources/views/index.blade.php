<!DOCTYPE html>
<html class="js no-touch wf-ffdinweb-n4-active wf-ffdinweb-n3-active wf-minionpro-i5-active wf-ffdinweb-n7-active wf-ffdinweb-n6-active wf-minionpro-n4-active wf-minionpro-n7-active wf-minionpro-i7-active wf-minionpro-i4-active wf-active" lang="{{App::getLocale()}}">
@include('layouts.head')


	<body class="home" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
		<!-- Google Tag Manager (noscript) -->

		<!-- End Google Tag Manager (noscript) -->


    @include('layouts.header')


		<div id="global-site-wrapper">
			<div id="global-site-content">
				<div class="mainContainer">
					<div id="global-site-content-drawer-cover"></div>
					<div id="ctl01_emergencyBanner_container" class="emergencyBanner-container">
						<div id="ctl01_emergencyBanner_div" class="emergencyBanner-div">
							<div id="ctl01_emergencyBanner_rte" class="emergencyBanner-rte">
								<span id="ctl01_emergencyBannerDescription">Label</span>
							</div>
						</div>
					</div>
					<div class="global-nav sticky-header">
						<button id="global-nav-drawer-button" class="global-nav-drawer-button" title="Expand navigation">≡</button>
						<a href="/" class="global-nav-logo" title="">
							<span>Chortoq Foundation</span>
						</a>
						<label for="global-nav-locale" class="global-nav-locale-label">
                        Language
                    </label>
						<select class="global-nav-locale" name="global-nav-locale" id="global_nav_locale">

							<option class="global-nav-locale" value="/locale/en/" title="en"
                            style="background-color: rgb(253, 253, 253); color: rgb(136, 136, 136);" @if(App::getLocale()=='en') selected @endif>En</option>
                            <option class="global-nav-locale" value="/locale/ru/" title="en"
                            style="background-color: rgb(253, 253, 253); color: rgb(136, 136, 136);" @if(App::getLocale()=='ru') selected @endif>Ru</option>




                        {{--
							<option class="global-nav-locale" value="/zh/" title="zh">中文</option> --}}




                        {{--
							<option class="global-nav-locale" value="/hi/" title="hi">हिंदी</option> --}}




						</select>
						<script>
                        $('#global_nav_locale').find('option').each(function(i, e) {
                            if ($(e).attr("title") === 'en') {
                                //$('#global-nav-locale').prop('selectedIndex', i);

                            }
                        });
                    </script>
						{{-- <div class="global-nav-search">
							<label for="nav-search-term">Search Chortoq Foundation.org</label>
							<input type="text" name="q" id="nav-search-term" value="" placeholder="Search  Chortoq Foundation.org">
								<button type="button" id="searchBtn" onclick="SubmitQuery()" title="Search"></button>
							</div> --}}
							<script>
                        if (!window.location.origin) {
                            window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? (':' + window.location.port) : '');
                        }

                        function SubmitQuery() {
                            var url = window.location.origin + "/search#q/k=" + $("#nav-search-term").val();
                            if ($("#nav-search-term").val() !== null && $("#nav-search-term").val() !== "") {
                                window.location = url;
                            }
                        }

                        $("#nav-search-term").keyup(function(event) {
                            if (event.keyCode == 13) {
                                $("#searchBtn").click();
                            }
                        });
                    </script>

                    {{--
							<div id="plcPrivacyPopup" style="display: none">
								<div class="cookie-message" style="z-index: 100;">
									<h2 class="cookie-message__title">PLEASE REVIEW OUR UPDATED PRIVACY &amp; COOKIES NOTICE
                            </h2>
									<div class="cookie-messages__body">
                                This site uses cookies and similar technologies to store information on your computer or device. By continuing to use this site, you agree to the placement of these cookies and similar technologies. Read our updated

										<a href="/Privacy-and-Cookies-Notice" target="_blank">Privacy &amp; Cookies Notice</a> to learn more.

									</div>
									<button class="btn cookie-message__button" id="js-cooking-message-accept">I AGREE</button>
								</div>
							</div> --}}

							<script type="text/javascript">
                        jQuery(document).ready(function() {
                            checkCookie();
                            jQuery("#js-cooking-message-accept").on("click", function() {
                                setCookie("PrivacyPolicy", "true", 365);
                                jQuery(this).closest(".cookie-message").css("display", "none");
                            });
                        });

                        function setCookie(cname, cvalue, exdays) {
                            var d = new Date();
                            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                            var expires = "expires=" + d.toUTCString();
                            document.cookie = cname + "=" + "true" + ";" + expires + ";path=/";
                        }

                        function getCookie(cname) {
                            var name = cname + "=";
                            var ca = document.cookie.split(';');
                            for (var i = 0; i < ca.length; i++) {
                                var c = ca[i];
                                while (c.charAt(0) == ' ') {
                                    c = c.substring(1);
                                }
                                if (c.indexOf(name) == 0) {
                                    return c.substring(name.length, c.length);
                                }
                            }
                            return "";
                        }

                        function checkCookie() {
                            var cookieExist = getCookie("PrivacyPolicy");
                            if (cookieExist == "") {
                                jQuery("#plcPrivacyPopup").css("display", "block");
                            }
                        }

							</script>
						</div>
						<form method="post" action="#" id="form1">
							<div></div>

                @include('layouts.slider')

							<style>
                        .header-banner-fullvideo {
                            padding: 440px 0 169px;
                        }

                        @media screen and (max-width: 1064px) {
                            .header-banner-fullvideo {
                                padding: 35% 0;
                            }
                        }
                    </style>
							<script>
                        $(document).ready(function() {
                            var enabledFullVideo = "False";
                            if (enabledFullVideo.toLowerCase() === "true") {
                                $(".header-banner--opacity").css("display", "none");
                                $(".header-banner__cover").css("display", "none");
                                $(".header-banner__title").css("display", "none");
                                $(".header-banner").addClass("header-banner-fullvideo");
                            }
                        });
                    </script>
                    {{--
							<section class="featured-article featured-article--animation" data-40p-top="margin-top:1%;" data-30p-top="margin-top:-1%;">
								<a href="/TheOptimist/coronavirus" id="bodyregion_1_homepagecomponents_0_AnchorArticleImage" class="featured-article__image" style="background-image: url(&#39;/-/media/GFO/Home/GettyImages-185760322.ashx&#39;)"></a>
								<div class="featured-article__text">
									<p>
										<a href="/TheOptimist/coronavirus" id="bodyregion_1_homepagecomponents_0_AnchorTitle">
                                    PERSPECTIVES ON THE GLOBAL RESPONSE
                                </a>
									</p>
									<h4>
										<a href="/TheOptimist/coronavirus" id="bodyregion_1_homepagecomponents_0_AnchorSubtitle">
											<b>COVID-19</b>
										</a>
									</h4>
									<a omni-title="Content For: " omni-events="" omni-vars="eVar16" omni-values="eVar16=" class="link-text omni-link-tracker" title="Read more" href="/TheOptimist/coronavirus">Read more</a>
								</div>
							</section>  --}}
                    @include('home.promise')
                    @include('home.what_we_do')
                    @include('home.believe')
                    @include('home.involved')
                   @include('layouts.footer')




							<script type="text/javascript">
                        //
								<![CDATA[
                        jQuery(document).ready(function() {
                            jQuery.getScript(script, function() {
                                addthis.init();
                            });
                        }); //]]>
							</script>
						</form>
					</div>
					<script type="text/javascript" language="javascript">
                var d = document;
            </script>
					<script type="text/javascript" src="/js/addthis_widget.js"></script>
					<script type="text/javascript" language="javascript">
                var addthis_config = {
                    data_track_clickback: false,
                pub_id: '',
                    ui_language: 'en'
                };

                var addthis_share = {
                    templates: {

                    },
                    url_transforms: {
                        shorten: {
                            twitter: 'bitly'
                        }
                    },
                    shorteners: {
                        bitly: {
                        login: '',
                            apiKey: 'R_1e5528c8252c17dcff3d30ee63b02233'
                        }
                    }
                };



                function ResetAddThis() {

                    if (window.addthis) {
                        window.addthis = null;
                        window._adr = null;
                        window._atc = null;
                        window._atd = null;
                        window._ate = null;
                        window._atr = null;
                        window._atw = null;
                    }
                    jQuery.getScript(script);
                    jQuery('div[id*=at16]').remove();
                    console.log("In ResetAddThis");
                    return true;
                }
            </script>
					<script src="/js/skrollr_298240E38F6B75B3B30DB6BEDBF48215.js"></script>
				</div>
			</div>
			<div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; top: -9999px; z-index: 100000;">
				<iframe id="_atssh52" title="AddThis utility frame" src="/js/sh.f48a1a04fe8dbf021b4cda1d.html" style="height: 1px; width: 1px; position: absolute; top: 0px; z-index: 100000; border: 0px; left: 0px;" data-gtm-yt-inspected-8775721_12="true" data-gtm-yt-inspected-8775721_248="true"
            data-gtm-yt-inspected-8775721_261="true" data-gtm-yt-inspected-8775721_213="true" data-gtm-yt-inspected-8775721_355="true"></iframe>
			</div>
			<style id="service-icons-0"></style>
			<script type="text/javascript" id="" src="/js/iframe_api">< /div >
			</script>
			<script type="text/javascript" id="">
        ! function(b, e, f, g, a, c, d) {
            b.fbq || (a = b.fbq = function() {
                a.callMethod ? a.callMethod.apply(a, arguments) : a.queue.push(arguments)
            }, b._fbq || (b._fbq = a), a.push = a, a.loaded = !0, a.version = "2.0", a.queue = [], c = e.createElement(f), c.async = !0, c.src = g, d = e.getElementsByTagName(f)[0], d.parentNode.insertBefore(c, d))
        }(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "1881807855372749");
        fbq("track", "PageView");
    </script>
			<noscript>
				<img height="1" width="1" src="https://www.facebook.com/tr?id=1881807855372749&amp;ev=PageView
&amp;noscript=1">
				</noscript>
				<script type="text/javascript" id="">
        var startEngage = (new Date).getTime(),
            timeEngaged = 0,
            idleTime = 0,
            idle = !0,
            idleReport = !1,
            idleTimer, reportTimer, setIdle = function() {
                idleTime = (new Date).getTime();
                timeEngaged += idleTime - startEngage;
                idle = !0
            },
            pulse = function(a) {
                idle && (idle = !1, startEngage = (new Date).getTime(), idleReport = !1);
                window.clearTimeout(idleTimer);
                idleTimer = window.setTimeout(setIdle, 5E3)
            },
            addListener = function(a, b) {
                window.addEventListener ? window.addEventListener(a, b) : window.attachEvent && window.attachEvent("on" + a, b)
            },
            report = function(a) {
                idle ||
                    (timeEngaged += (new Date).getTime() - startEngage);
                !idleReport && 0 < timeEngaged && 36E5 > timeEngaged && window.dataLayer.push({
                    event: "nonIdle",
                    nonIdleTimeElapsed: timeEngaged
                });
                idle && (idleReport = !0);
                a && "beforeunload" === a.type && window.removeEventListener("beforeunload", report);
                timeEngaged = 0;
                startEngage = (new Date).getTime();
                reportTimer = window.setTimeout(report, 15E3)
            };
        addListener("mousedown", pulse);
        addListener("keydown", pulse);
        addListener("scroll", pulse);
        addListener("mousemove", pulse);
        addListener("beforeunload", report);
        idleTimer = window.setTimeout(setIdle, 5E3);
        reportTimer = window.setTimeout(report, 15E3);

				</script>
			</body>
		</html>
