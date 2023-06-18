<?php

session_start();
$adminid= $_SESSION["adminid"]; 
// echo $adminid;
// if($adminid==null){
//     header("location:index.php");
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Epcet library</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="adminstyle.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="header-1">

        <a href="#" class="logo">  <i class="fas fa-book"></i> EPCET Library</a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="search here..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <a href="#" class="fas fa-plus"></a>
            <a href="admin_request.php" class="fas fa-shopping-cart"></a>
            <div id="login-btn" class="fas fa-user"></div>
        </div>

    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#About">About</a>
            <a href="#featured">featured</a>
            <a href="#arrivals">arrivals</a>
            <a href="#reviews">Testimonials</a>
            <a href="circular.php">Circular</a>
            <a href="#blogs">News letter</a>
            <a href="#" id="libservices-btn">Digital library</a>
            <a href="http://43.252.88.138:8080/EPCET/index.php">OPAC</a>
            <a href="https://ndl.iitkgp.ac.in/">NDL</a>
        </nav>
    </div>

</header>

<!-- header section ends -->

<!-- bottom navbar  -->

<nav class="bottom-navbar">
    <a href="#home" class="fas fa-home"></a>
    
    <a href="#About" class="fas fa-info-circle"></a>
    <a href="#reviews" class="fas fa-comments"></a>
    <a href="circular.php" class="fas fa-bullhorn"></a>
    <a href="#blogs" class="fas fa-newspaper"></a>
    <a href="#" id="list-btn"class="fas fa-list"></a>
    

</nav>

<!-- bottom navbar -->
<div class="list-form-container container">

    <div id="close-list-btn" class="fas fa-times"></div>

 
    <div class="list-1">
        <div class="leftinnerdiv">

            <div ><a href="circular.php" class="btn"><pre>         Circular           </pre></a><br></div>
            <div ><a href="#" id="els-btn" class="btn"><pre>    Digital library     </pre></a><br></div>
            <div ><a href="http://43.252.88.138:8080/EPCET/index.php" class="btn"><pre>             OPAC            </pre></a><br></div>
            <div ><a href="https://ndl.iitkgp.ac.in/" class="btn"><pre>                NDL             </pre></a><br></div>
            <div ><a href="#" id="news-btn" class="btn"><pre>    E-News papper   </pre></a><br></div>
         
     


        </div>

    </div>


</div>

<!-- bottom bar e libservices -->

<div class="els-form-container container">

    <div id="close-els-btn" class="fas fa-times"></div>
    
    <section class="deal footer">
        <div class="content box-container">
            <!-- <h3 style="color: #ff1b1b;"> LIBRARY RULES & REGULATIONS:</h3> -->
            
              <div class="leftinnerdiv line">
                <h3>E-Library services</h3>

                 <div class="box" > 
                 <a href="https://vtuconsortium.mapmyaccess.com/" ><i class="fas fa-arrow-right"></i> VTU CONSORTIUM SERVICE</a>
                 <a href="http://164.100.247.26/" class="" ><i class="fas fa-arrow-right"></i> DELNET SERVICE</a>
                 <a href="https://nptel.ac.in/" class="" ><i class="fas fa-arrow-right"></i>NPTEL</a>
                 <a href="https://swayam.gov.in/" class=""><i class="fas fa-arrow-right"></i> SWAYAM ONLINE EDUCATIONAL PORTAL</a>
                 <a href="https://shodhganga.inflibnet.ac.in:8443/jspui/" class=""><i class="fas fa-arrow-right"></i>SHODHGANGA FOR ONLINE THESIS</a>
                 <a href="https://www.vturesource.com/vtu-question-papers/" class=""><i class="fas fa-arrow-right"></i> VTU PREVIOUS YEAR QUESTION PAPERS ACCESS</a>
                 <a href="https://oatd.org/" class=""><i class="fas fa-arrow-right"></i> OPEN ACCESS THESIS & DISSERTATIONS</a>
                 <a href="http://shodhgangotri.inflibnet.ac.in/" class=""><i class="fas fa-arrow-right"></i> SHODHGANGOTRI ONLINE REPOSITORY FOR RESEARCH IN PROGRESS</a>
                 <a href="https://onlinelibrary.wiley.com/" class=""><i class="fas fa-arrow-right"></i> OPEN ONLINE E-LIBRARY RESOURCES</a>
                 <a href="https://pubs.acs.org/page/books/index.html" class=""><i class="fas fa-arrow-right"></i>OPEN ACS E-BOOKS</a>
                </div>
               



                 </div>

            


    
    
        </div>

    


    </section>


</div>


<!-- end  -->

<!-- bottom bar e news papper -->
<div class="news-form-container container">

    <div id="close-news-btn" class="fas fa-times"></div>

 
    <section class="deal footer">
        <div class="content box-container">
            <!-- <h3 style="color: #ff1b1b;"> LIBRARY RULES & REGULATIONS:</h3> -->
            
              <div class="leftinnerdiv line">
                <h3>E-Library services</h3>

                 <div class="box" > 
                 <a href="https://www.deccanherald.com/" target="block" ><i class="fas fa-arrow-right"></i> Deccan Herald</a>
                 <a href="https://www.nationalheraldindia.com/" target="block" class="" ><i class="fas fa-arrow-right"></i> National Herald</a>
                 <a href="https://www.thehindu.com/" target="block" class="" ><i class="fas fa-arrow-right"></i>The Hindu</a>
                 <a href="https://www.newindianexpress.com/" target="block" class=""><i class="fas fa-arrow-right"></i> THE NEW INDIAN EXPRESS</a>
                 <a href="https://timesofindia.indiatimes.com/" target="block" class=""><i class="fas fa-arrow-right"></i>Times of India</a>
                 <a href="https://vijaykarnatakaepaper.com/loginuser.php?id=1" target="block" class=""><i class="fas fa-arrow-right"></i>Vijaya Karnataka</a>
                 <a href="http://epapervijayavani.in//" target="block" class=""><i class="fas fa-arrow-right"></i>Vijaya Vani</a>
                 
                </div>
               



                 </div>

            


    
    
        </div>

    


    </section>



</div>

<!-- end  -->

<!-- login form  -->

<div class="login-form-container container">

    <div id="close-login-btn" class="fas fa-times"></div>

 
    <div class="innerdiv">
        <div class="leftinnerdiv">

            <div ><a href="add_a_book.php" class="btn"><pre>    Add a book   </pre></a><br></div>
            <div ><a href="Booksreport.php" class="btn"><pre>    Booksreport </pre></a><br></div>
            <div ><a href="BookRequest.php" class="btn"><pre>  Book Request </pre></a><br></div>
            <div ><a href="Add_a_student.php" class="btn"><pre>Add a student </pre></a><br></div>
            <div ><a href="StudentReport.php" class="btn"><pre>Student Report</pre></a><br></div>
            <div ><a href="Issuebook.php" class="btn"><pre>    Issue book     </pre></a><br></div>
            <div ><a href="Issuereport.php" class="btn"><pre>  Issue report    </pre></a><br></div>
            <div ><a href="index.php" class="btn"><pre>        Logout         </pre></a><br></div>
     


        </div>

    </div>


</div>

<!-- library services starts -->
<div class="libservices-form-container container">

    <div id="close-libservices-btn" class="fas fa-times"></div>
    
    <section class="deal footer">
        <div class="content box-container">
            <!-- <h3 style="color: #ff1b1b;"> LIBRARY RULES & REGULATIONS:</h3> -->
            
              <div class="leftinnerdiv line">
                <h3>E-Library services</h3>

                 <div class="box" > 
                 <a href="https://vtuconsortium.mapmyaccess.com/" ><i class="fas fa-arrow-right"></i> VTU CONSORTIUM SERVICE</a>
                 <a href="http://164.100.247.26/" class="" ><i class="fas fa-arrow-right"></i> DELNET SERVICE</a>
                 <a href="https://nptel.ac.in/" class="" ><i class="fas fa-arrow-right"></i>NPTEL</a>
                 <a href="https://swayam.gov.in/" class=""><i class="fas fa-arrow-right"></i> SWAYAM ONLINE EDUCATIONAL PORTAL</a>
                 <a href="https://shodhganga.inflibnet.ac.in:8443/jspui/" class=""><i class="fas fa-arrow-right"></i>SHODHGANGA FOR ONLINE THESIS</a>
                 <a href="https://www.vturesource.com/vtu-question-papers/" class=""><i class="fas fa-arrow-right"></i> VTU PREVIOUS YEAR QUESTION PAPERS ACCESS</a>
                 <a href="https://oatd.org/" class=""><i class="fas fa-arrow-right"></i> OPEN ACCESS THESIS & DISSERTATIONS</a>
                 <a href="http://shodhgangotri.inflibnet.ac.in/" class=""><i class="fas fa-arrow-right"></i> SHODHGANGOTRI ONLINE REPOSITORY FOR RESEARCH IN PROGRESS</a>
                 <a href="https://onlinelibrary.wiley.com/" class=""><i class="fas fa-arrow-right"></i> OPEN ONLINE E-LIBRARY RESOURCES</a>
                 <a href="https://pubs.acs.org/page/books/index.html" class=""><i class="fas fa-arrow-right"></i>OPEN ACS E-BOOKS</a>
                </div>
               



                 </div>

            


    
    
        </div>

    


    </section>


</div>
<!-- library services starts ends -->
<!-- home section starts  -->

<section class="home" id="home">

    <div class="row">

        <div class="content">
            <h3>When in doubt go to the Library.</h3>
            <pre>
            <p>Visit us :
From : 8:00am to 8:00pm.
@:Eastpoint college of engineering and technology.
ECE block
            </p></pre>
            <a href="http://43.252.88.138:8080/EPCET/index.php" class="btn">Borrow a book</a>
        </div>

        <div class="swiper books-slider">
            <div class="swiper-wrapper">
                <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png" class="stand" alt="">
        </div>

    </div>

</section>

<!-- home section ense  -->

<!-- icons section starts  -->

<section class="icons-container">
<!-- 
    <div class="icons">
        <i class="fas fa-shipping-fast"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p>order over $100</p>
        </div>
    </div> -->
    <div class="icons">
        <i class="fas fa-book"></i>
        <div class="content">
            <h3>M T W T F S</h3>
            <p>Borrow books anytime</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>Return on time</h3>
            <p>12 days tenure</p>
        </div>
    </div>

    <div class="icons">
        <img src="image/bail.png" width="50px" alt="">
        <!-- <i class="fas fa-inr" aria-hidden="true"></i> -->
        <div class="content">
            <h3>Return overdue</h3>
            <p>late return may cause you penalty</p>
        </div>
    </div>



</section>

<!-- icons section ends -->


<!-- About section starts  -->

<section class="deal" id="About">

    <div class="content">
        <h3> ABOUT THE EPCET CENTRAL LIBRARY:</h3>
        <!-- <h1>upto 50% off</h1> -->
        <p>
        The EPCET Central Library was started in the year 1997 with a small collection of books. The 
        present library is built on an area of 650 sqm with 100 user seating capacity and it is furnished
        with modern furniture. The Central Library is centrally situated and easily accessible to all the 
        departments in the campus. The library serves the information needs of the students, research 
        scholars, teaching faculty and non-teaching staff of the College. </p>

        <p> The library has a large collection of 42 thousand volumes, in various subjects, are very useful to all users. In addition to book collection, the library concentrates on subscribing for the journals and learned periodicals which are very useful for the College research works. It aims to achieve this, through acquisition, organization and dissemination of latest library materials and providing information resources to the users from its rich and diverse collections and help in the development of highly motivated, knowledgeable, skilled and talented staff. </p>
<p>
        Automation of Library housekeeping operations carried out by using EASYLIB Software and DDC classification scheme has been followed to classifying library books. OPAC (Online Public Access Catalogue) facility is available at the library entrance to facilitate online search of books available in the library with Title, Author, Keyword and Subject search options. 
        </p> 
        <p>
        Digital Library services are available to the users with 30 Laptops at free of cost. E- Journals, E-books and databases are subscribed through VTU-Consortium, DELNET & NDL etc. Number of open access journals, databases and other useful resources are available for the academic community. CDs/DVDs are available.
        
</p>

<div  class="fas fa-rules">
    <h2 class="btn" id="rules-btn">LIBRARY RULES & REGULATIONS </h2>
    <p></p>
</div>
<!-- availability -->
<div class="line">
    <h3>Availability</h3>
<li> TOTAL NO. OF TITLES:4154</li>
<li>TOTAL NO. OF VOLUMES:42706</li> 
<li>TOTAL NO. OF PRINT JOURNALS: 38</li> 
<li>TOTAL NO. OF PRINT MAGAZINES: 25</li> 
<li>BOUND VOLUMES: 116</li> 
<li>NO. OF NEWS PAPERS: 05</li> 
</div>
<!-- infracture -->
    <div class="line">
        <h3> Our Infrastructure :</h3>
        <li>Total area of the library: 650 Sqm</li>
        <li>Seating capacity of the library: 100</li>
        <li>Reprographic facility (Yes/No): YES</li>
        <li>Library networking facility (Yes/No): YES</li>
        <li>Books are issued to the faculty & Students</li>
        <li>Compact disk / DVD: 1431</li>
        <li>Library management software: Easylib software</li>
        <li>Classification of Scheme – DDC</li>


    </div>
</div>
<!-- 
    <div class="image">
        <img src="image/deal-img.jpg" alt="">
    </div> -->

</section>

<!-- About section ends -->
<div class="rules-form-container container">

    <div id="close-rules-btn" class="fas fa-times"></div>
    <section class="deal">
    <div class="content">
        <h3 style="color: #ff1b1b;"> LIBRARY RULES & REGULATIONS:</h3>
        <p>1.	Library timings: 8 A.M to 8P.M (Monday to Friday) & 9 A.M to 4 P.M (weekends & holidays)</p>
       <p>2.	Readers should observe strict silence inside the Library.</p>
       <p>3.	Always carry the Identity card and must be produced whenever asked for.ID card is mandatory for borrowing books.</p>
       <p>4.	The personal belongings are not allowed inside the Library and all such items are to be kept in the library property counter.</p>
       <p>5.	Library cards are not transferable.</p>
       <p>6.	Each student can borrow 6 books from the library for the load period of 30 days.</p>
       <p>7.	If a book is not returned to the library, when due, the borrower will be fined Rs.5/- per day.</p>
       <p>8.	Students are required to sign in the Gate register while entering and exit.</p>
       <p>9.	Use of Mobile phones is not permitted inside the Library premises.</p>
       <p>10.	Users are not allowed to carry eatables/drinks inside the Library premises.</p>
       <p>11.	Readers are not allowed to bring their personal books inside the Library.</p>
       <p>12.	Marking, scratching, damaging, mutilating, stealing, library materials or property will invite disciplinary action against the defaulters.</p>
       <p>13.	Readers should not talk or discuss as they may disturb other readers. </p>
       <p>14.	No library material can be taken out of the library without permission.</p>
       <p>15.	Loss of borrowed material must be immediately reported. The replacement charge (double the current price) for lost material will also include overdue charges if applicable.</p>
       <p>16.	The library shall not be responsible for any loss or damage of the personal belongings of the users.</p>
       <p>17.	Don’t misplace the Library books from the library racks.</p>
       <p>18.	Any issued book taken out of the library should be kept outside.</p>
       <p>19.	The Librarian reserves the right to suspend the membership of any member found misbehaving with the library staff or with any other member.</p>
       <p>20.	The library follows open access system. All books/journals taken out of the rack should not be replaced by users after referring/reading. Such books should be left on the table itself.</p>
       <p>21.	Reference books are not issued to home reading. </p>

       <h2>Thank you</h2>

       
    </div>

    


   </section>


</div>

<!-- featured section starts  -->

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured books</span> </h1>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-1.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-2.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-3.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-4.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-5.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-6.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-7.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-8.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-9.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="icons">
                    <a href="#" class="fas fa-search"></a>
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
                <div class="image">
                    <img src="image/book-10.png" alt="">
                </div>
                <div class="content">
                    <h3>featured books</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <a href="#" class="btn">Borrow now</a>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- featured section ends -->

<!-- newsletter section starts -->

<section class="newsletter">

    <form action="">
        <h3>subscribe for latest updates</h3>
        <input type="email" name="" placeholder="enter your email" id="" class="box">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts  -->

<section class="arrivals" id="arrivals">

    <h1 class="heading"> <span>new arrivals</span> </h1>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-1.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-2.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-3.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-4.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-5.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

    <div class="swiper arrivals-slider">

        <div class="swiper-wrapper">

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-6.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-7.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-8.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-9.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="image/book-10.png" alt="">
                </div>
                <div class="content">
                    <h3>new arrivals</h3>
                    <!-- <div class="price">$15.99 <span>$20.99</span></div> -->
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </a>

        </div>

    </div>

</section>

<!-- arrivals section ends -->



<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>Studdent Talks</span> </h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-5.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-6.png" alt="">
                <h3>john deo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur nihil ipsa placeat. Aperiam at sint, eos ex similique facere hic.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>
    
</section>

<!-- reviews section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>News Letter</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, odio.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>our location</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> banglore</a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3294.4918210570277!2d77.7138145208157!3d13.050378300593314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae106e66380fd9%3A0x270929984dd1db7!2sEast%20Point%20College%20of%20Engineering%20And%20Technology!5e0!3m2!1sen!2sin!4v1671983792371!5m2!1sen!2sin" width="200" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> africa </a> -->
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#About"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#arrivals"> <i class="fas fa-arrow-right"></i> arrivals </a>
            <a href="#reviews"> <i class="fas fa-arrow-right"></i> testimonials </a>
            <a href="#blogs"> <i class="fas fa-arrow-right"></i> newsletter </a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> Staff details </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> ordered items </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> payment method </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> eastpoint@gmail.com </a>
            <img src="image/worldmap.png" class="map" alt="">
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit"> created by <span>Tp</span> |© copyrights all rights reserved! 2023 </div>

</section>

<!-- footer section ends -->

<!-- loader  -->

<!-- <div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div> -->
















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }
        </script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>