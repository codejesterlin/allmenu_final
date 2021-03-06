﻿<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Allmenus.Ge | Home</title>
        @yield('header')
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/allmenus.css" rel="stylesheet">

</head>

<body>
 <!--HEADER-->
    <section id="hedbg">
        <div class="container">
            <a href="http://allmenus.ge/"><h1 class="text-center"><img src="images/logo.png" style="margin-top:10px;" alt="logo"></h1></a>
           <a href="add"  class="btn btn-default">ობიექტის დამატება</a>
        </div>
    </section>
    <!--/HEADER-->

    <!--FILTER-->
    <section id="search">
        <div class="container">
            <div class="filter-bg">
                <!--LOCATION-->
                <div class="filter-selectors">
                    {{Form::open(array('url'=>'search'))}}
                    <select name="adress[]" class="selectpicker" title="მდებარეობა" multiple>
                        <option>ვარკეთილი</option>
                        <option>ისანი</option>
                        <option>სამგორი</option>
                        <option>ავლაბარი</option>
                        <option>რუსთაველი</option>
                        <option>თავისუფლება</option>
                        <option>ახმეტელი</option>
                        <option>დიდუბე</option>
                        <option>ღრმაღელე</option>
                    </select>
                </div>
                <!--/LOCATION-->
                <!--TYPE-->
                <div class="filter-selectors">
                    <select name="type[]" class="selectpicker" title="ობიექტის ტიპი" multiple>
                        <option>რესტორანი</option>
                        <option>კაფე</option>
                        <option>სწრაფი კვება</option>
                        <option>ბარი</option>
                    </select>
                </div>
                <!--/TYPE-->

                <input name="name" type="text" class="object-name" placeholder="სახელწოდება...">
                <input name="submit" class="btn btn-warning" type="submit" value="ძიება">


                <br>
                <div id="chechboxes">
                    <input name="sasmeli" class="checkbox" id="check-1" type="checkbox">
                    <label  tabindex="1" for="check-1" class="checkbox-label">სასმლის შეტანა</label>

                    <input name="musika" class="checkbox" id="check-2" type="checkbox">
                    <label tabindex="2" for="check-2" class="checkbox-label">ცოცხალი მუსიკა</label>

                    <input name="fexburti" class="checkbox" id="check-3" type="checkbox">
                    <label tabindex="3" for="check-3" class="checkbox-label">ფეხბურთის ტრანსლაცია</label>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </section>
    <!--/FILTER-->




@yield('content')


<!--FOOTER-->
<section id="footer">
    <div class="container clearfix">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h4>ჩვენს შესახებ</h4>
                <p>
                    Allmenus.ge ეს არის უნიკალური, მომხმარებლის კომფორტზე ორიენტირებული კატალოგის ტიპის საიტი, სადაც განთავსებულია თბილისში არსებული კვების ობიექტების შესახებ ინფორმაცია. საიტის ნებისმიერ ვიზიტორს შესაძლებლობა ეძლევა მისთვის სასურველი ინფორმაციის მიხედვით კვების ობიექტების გაფილტვრა და მათზე ამომწურავი ინფრომაციის მიღება. მაგრამ საიტის მთავარი უპირატესობა - მასში ინტეგრირებული მენიუა, რომლის მეშვეობითაც შესაძლეელია სასურველი კერძების მონიშვნა, რაოდენობის მითითება და შერჩეული მენიუს ფასის ავტომატური დაანგარიშება..                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                </p>

                <a href="#"><div id='facebook'></div></a>
                <a href="#"><div id='twitter'></div></a>
                <a href="#"><div id='google'></div></a>
            </div>
            <!--contact-->
            <div class="col-sm-6 col-xs-12">
                <h4>დაგვიკავშირდით</h4>

                <div class="left-inner-addon">
                    <i class="glyphicon glyphicon-user color-icon"></i>
                    <input type="text" class="form-info" placeholder="თქვენი სახელი..." />
                </div>

                <div class="left-inner-addon">
                    <i class="glyphicon glyphicon-envelope color-icon"></i>
                    <input type="text" class="form-info" placeholder="ელ.ფოსტა" />
                </div>

                <textarea class="form-control" rows="3"></textarea>
                <input class="btn btn-primary" type="submit" value="გაგზავნა">
            </div>
            <!--contact(end)-->
        </div>
        <hr>
        <p class="leftside">&copy; ყველა უფლება დაცულია</p>
        <p class="rightside">საიტი დამზადებულია <a href='www.respo.ge'>RESPO</a> - ს მიერ</p>
    </div>
</section>
<!--/FOOTER-->

<!-- javascript -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src='js/allmenus.js'></script>




</body>
</html>
