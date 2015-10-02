<?php
    include "";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="" />
        <meta name="keywords" content="">
        <meta name="author" content="Websiter.co.il - Nir Gofman">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/jquery.js"></script>
        <script>
            $(document).ready(function(){
               $(".tab1").click(function(){
                    $(".tab1Div").css("display","block");
                    $(".tab2Div").css("display","none");
                    $(".tab3Div").css("display","none");
                    $(".tab1").addClass("activeTab");
                    $(".tab2").removeClass("activeTab");
                    $(".tab3").removeClass("activeTab");
               });
               $(".tab2").click(function(){
                    $(".tab2Div").css("display","block");
                    $(".tab1Div").css("display","none");
                    $(".tab3Div").css("display","none");
                   $(".tab2").addClass("activeTab");
                   $(".tab1").removeClass("activeTab");
                   $(".tab3").removeClass("activeTab");
               });
               $(".tab3").click(function(){
                    $(".tab3Div").css("display","block");
                    $(".tab2Div").css("display","none");
                    $(".tab1Div").css("display","none");
                   $(".tab3").addClass("activeTab");
                   $(".tab2").removeClass("activeTab");
                   $(".tab1").removeClass("activeTab");
               });
            });
        </script>
    </head>
    <body style="background: #f9f9f9 !important;">
        <div class="topSection" style="border-bottom: 1px solid #ddd;">
            <div class="logoArea">
                <h1>DIMON@HACK</h1>
            </div>
            <a class="eventDetailsLink" href="Details.php">פרטי האירוע</a>
            <a class="registerLink" href="Details.php">הרשמה</a>
        </div>
        <div class="grid">
            <div class="tabs">
                <div class="tabSpace"></div>
                <div class="tab tab1 activeTab">
                    <span class="tabIcon icon1"><Br></span>
                </div>
                <div class="tab tab2">
                    <span class="tabIcon icon2"><Br></span>
                </div>
                <div class="tab tab3" style="border-left: 1px solid #aaa;">
                    <span class="tabIcon icon3"><Br></span>
                </div>
            </div>
            <div class="allTabsDivs">
                <div class="tab1Div">
                    <h2 class="tabTitle">מה זה האירוע הזה?</h2>
                    <h3 class="tabSubTitle">דע יותר על האירוע</h3>
                    <div class="liner"><span></span></div>
                    <p class="tabParagraph">
                        לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית נולום ארווס סאפיאן - פוסיליס קוויס, אקווזמן קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף נולום ארווס סאפיאן - פוסיליס קוויס, אקווזמן קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח. לת צשחמי קונדימנטום קורוס בליקרה, נונסטי קלובר בריקנה סטום, לפריקך תצטריק לרטי.
                    <br><br>
                        להאמית קרהשק סכעיט דז מא, מנכם למטכין נשואי מנורךגולר מונפרר סוברט לורם שבצק יהול, לכנוץ בעריר גק ליץ, ושבעגט. קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח. לת צשחמי צש בליא, מנסוטו צמלח לביקו ננבי, צמוקו בלוקריה שיצמה ברורק.</p>
                </div>
                <div class="tab2Div">
                    <h2 class="tabTitle">מתי קורה מה?</h2>
                    <h3 class="tabSubTitle">מתי האירוע, ארוחות, הרצעות והפתעות נוספות?</h3>
                    <div class="liner"><span></span></div>
                    <p class="tabParagraph">
                        לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית נולום ארווס סאפיאן - פוסיליס קוויס, אקווזמן קוואזי במר מודוף. אודיפו בלאסטיק
</p>
                    <div class="schedule1Div">
                        <h2 class="scheduleTitle">לוח זמנים - יום חמישי 19.11.2015<Br><span class="lineTitleSpan"></span></h2>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <span class="timeSpan leftTime">11:00</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <h3 class="timeDetailsTitle rightTitle">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג</h3>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <h3 class="timeDetailsTitle leftTitle">לורם איפסום דולור סיט אמט</h3>
                                <span class="byLabel leftTime">- ע״י יצחק כהן</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <span class="timeSpan rightTime">11:00</span>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <span class="timeSpan leftTime">11:00</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <h3 class="timeDetailsTitle rightTitle">לורם איפסום דולור סיט אמט, קונסקטורר</h3>
                                <span class="byLabel rightTime">- ע״י יצחק כהן</span>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <h3 class="timeDetailsTitle leftTitle">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג</h3>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <span class="timeSpan rightTime">11:00</span>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <span class="timeSpan leftTime">11:00</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <h3 class="timeDetailsTitle rightTitle">לורם איפסום דולור סיט אמט</h3>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <h3 class="timeDetailsTitle leftTitle">לורם איפסום דולור סיט אמט, קונסקטורר</h3>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <span class="timeSpan rightTime">11:00</span>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <span class="timeSpan leftTime">11:00</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <h3 class="timeDetailsTitle rightTitle">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג</h3>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <h3 class="timeDetailsTitle leftTitle">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג</h3>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                               <!-- <div class="lineTimeLine"></div>-->
                            </div>
                            <div class="rightTimeLineDiv">
                                <span class="timeSpan rightTime">11:00</span>
                            </div>
                        </div>
                    </div>

                    <div class="schedule1Div">
                        <h2 class="scheduleTitle">לוח זמנים - יום שישי 20.11.2015<Br><span class="lineTitleSpan"></span></h2>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <span class="timeSpan leftTime">11:00</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <h3 class="timeDetailsTitle rightTitle">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג</h3>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <h3 class="timeDetailsTitle leftTitle">לורם איפסום דולור סיט אמט</h3>
                                <span class="byLabel leftTime">- ע״י יצחק כהן</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <span class="timeSpan rightTime">11:00</span>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <span class="timeSpan leftTime">11:00</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <h3 class="timeDetailsTitle rightTitle">לורם איפסום דולור סיט אמט, קונסקטורר</h3>
                                <span class="byLabel rightTime">- ע״י יצחק כהן</span>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <h3 class="timeDetailsTitle leftTitle">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג</h3>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <span class="timeSpan rightTime">11:00</span>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <span class="timeSpan leftTime">11:00</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <h3 class="timeDetailsTitle rightTitle">לורם איפסום דולור סיט אמט</h3>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <h3 class="timeDetailsTitle leftTitle">לורם איפסום דולור סיט אמט, קונסקטורר</h3>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <span class="timeSpan rightTime">11:00</span>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <span class="timeSpan leftTime">11:00</span>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <div class="lineTimeLine"></div>
                            </div>
                            <div class="rightTimeLineDiv">
                                <h3 class="timeDetailsTitle rightTitle">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג</h3>
                            </div>
                        </div>
                        <div class="timeDiv">
                            <div class="leftTimelineDiv">
                                <h3 class="timeDetailsTitle leftTitle">לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג</h3>
                            </div>
                            <div class="timeLineDiv">
                                <div class="circleTimeLineDiv"></div>
                                <!-- <div class="lineTimeLine"></div>-->
                            </div>
                            <div class="rightTimeLineDiv">
                                <span class="timeSpan rightTime">11:00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab3Div">
                    <h2 class="tabTitle">מי הולך לדבר ולהרצות?</h2>
                    <h3 class="tabSubTitle">דולור סיט אמט, קונסקטורר אדיפיסינג אלית נו</h3>
                    <div class="liner"><span></span></div>
                    <p class="tabParagraph">
                        לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית נולום ארווס סאפיאן - פוסיליס קוויס, אקווזמן קוואזי במר מודוף. אודיפו בלאסטיק
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>