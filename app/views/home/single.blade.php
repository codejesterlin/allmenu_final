<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Allmenus.Ge | Home</title>
      <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/allmenus.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/allmenus.css" rel="stylesheet">

</head>

<body>




    <!--HEADER-->
    <section id="hedbg">
        <div class="container">
            <div class="btn btn-default">ობიექტის დამატება</div>
        </div>
    </section>
    <!--/HEADER-->
    <!--OBJECT-FULL-->
    <div class="container page">
        <!--Object-title-->

        <blockquote>
            <p>
                {{$get_search->name}}
                <small>{{$get_search->type}}</small>
            </p>
        </blockquote>
        <!--Object-title(END)-->
        <!--ROW-->
        <div class="row object-page">
            <div class="col-md-5 col-xs-12">
                <div id="image-for-carousel">
                    <!--SLIDER-->
                    <div class="fadeslider">

                        <!--IMAGE-->
                        <div class="slide"><img src="images/image.jpg" alt="" /></div>
                        <!--IMAGE(END)-->
                        <!--IMAGE-->
                        <div class="slide"><img src="images/image.png" alt="" /></div>
                        <!--IMAGE(END)-->

                        <div class="slideback"></div>
                        <div class="slidenext"></div>

                    </div>
                    <!--SLIDER(END)-->
                </div>
            </div>
            <!--Carousel(END)-->
            <div class="col-md-7 col-xs-12">
                <h4>ინფორმაცია</h4>
                <div class="information-about-object">
                    <div class="addres-icon"></div> <p>{{$get_search->adress}}</p>
                </div>
                <div class="information-about-object">
                    <div class="phone-icon"></div> <p>{{$get_search->phone}}</p>
                </div>
                <h4>აღწერა</h4>
                <p>{{$get_search->info}}</p>
                @foreach($get_cat as $catt)
            <a href="menu/{{$get_search->id}}/0">ედსფსდფსდფსდფსდფ<div class="btn btn-info"></div></a>
                    @endforeach
            </div>
        </div>
        <!--ROW(END)-->
    </div>
    <!--OBJECT-fULL(END)-->

<!--FOOTER-->
<section id="footer">
    <div class="container clearfix">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h4>ჩვენს შესახებ</h4>
                <p>
                    Allmenus.ge ეს არის უნიკალური, მომხმარებლის კომფორტზე ორიენტირებული კატალოგის ტიპის საიტი, სადაც განთავსებულია თბილისში არსებული კვების ობიექტების შესახებ ინფორმაცია. საიტის ნებისმიერ ვიზიტორს შესაძლებლობა ეძლევა მისთვის სასურველი ინფორმაციის მიხედვით კვების ობიექტების გაფილტვრა და მათზე ამომწურავი ინფრომაციის მიღება. მაგრამ საიტის მთავარი უპირატესობა - მასში ინტეგრირებული მენიუა, რომლის მეშვეობითაც შესაძლეელია სასურველი კერძების მონიშვნა, რაოდენობის მითითება და შერჩეული მენიუს ფასის ავტომატური დაანგარიშება..