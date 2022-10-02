<?php
    session_start();
    $user_id = $_SESSION['id'];

    include 'partials/header.php'; 
    include "partials/db.php";

    $id2 = $_GET["ID"];
    $id = base64_decode($id2);
    $search_link = "select * from links where id = '$id'";

    $result = mysqli_query($db,$search_link);
    $link_count = mysqli_num_rows($result);

    if($link_count){
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $link = $row['link'];
    }
?>
    <div class="text-center my-20">
        <p class="text-2xl text-black font-bold">Please wait</p>
        <p class="text-base text-black font-bold">You will redirect in <span id="seconds">3</span> sec</p> 
    </div>

    <div class="px-4 max-w-fit md:h-[720px] md:max-w-7xl md:px-16 mx-auto">
        <img class="h-full w-full" src="https://images.pexels.com/photos/920382/pexels-photo-920382.jpeg?cs=srgb&dl=pexels-andrea-piacquadio-920382.jpg&fm=jpg" alt="">
        
        <!-- content are here  -->
        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-12 md:col-span-8">
                
                <div class="my-4">
                    <p class="text-xl md:text-3xl font-bold py-6 ">Fire Insurance Under Indian Insurance Law</p>
                    <p class="text-base text-justify">A comprehension of Insurance shows up when an individual looking for confirmation security goes into a simultaneousness with the financier to repay him against loss of property by or inadvertent to fire and furthermore helping, sway, and so forth This is fundamentally a plan and accordingly as is addressed by the overall law of comprehension. Notwithstanding, it has certain amazing highlights as security exchanges, for example, most incredible sureness, insurable interest, repayment, subrogation and duty, and so forth these standards are average in all affirmation contracts and are overseen by remarkable rules of law.</p>
                </div>

                <div class="my-4">
                    <p class="text-xl md:text-3xl font-bold py-6 ">FIRE INSURANCE:</p>
                    <p class="text-base text-justify">As per S. 2(6A), “fire confirmation business” signifies the matter of affecting, in any case than by occasion to some other class of security business, courses of action of protection against misfortune by or unusual to fire or another event, commonly included among the dangers shielded against in fire affirmation business.<br> <br> As appeared by Halsbury, it is a comprehension of affirmation by which the financier concurs for thought to repay the guaranteed up midway and subject to unequivocal terms and conditions against episode or underhandedness by fire, which may happen to the property of the guaranteed during a particular period.<br> <br>

                    Accordingly, fire protection is a comprehension whereby the individual, looking for security affirmation, goes into a simultaneousness with the guarantor to repay him against loss of property by or spontaneous to fire or lightning, sway, and so forth This arrangement is intended to shield one’s property and different things from episode occurring considering total or halfway harm by fire.</p>
                </div>

                <div class="my-4">
                    <p class="text-xl md:text-3xl font-bold py-6 ">In its outrageous sense, a fire confirmation contract is one:</p>
                    <ul class="pl-6">
                        <li class="list-decimal"><p class="text-base text-justify">Whose standard thing is protection against difficulty or wickedness occasioned by fire?</p></li>
                        <li class="list-decimal"><p class="text-base text-justify">The degree of back up game plan’s risk being restricted by the aggregate guaranteed and not for the most part by the degree of incident or harm maintained by the made sure about: and</p></li>
                        <li class="list-decimal"><p class="text-base text-justify">The financier having no income in the thriving or annihilation of the guaranteed property separated from the threat got a handle on under the plan.</p></li>
                    </ul>
                </div>

                <div class="my-2">
                    <p class="text-xl md:text-3xl font-bold py-6 ">INSURABLE INTEREST</p>
                    <p class="text-base text-justify">An individual who is so spellbound by property as to have an advantage from its reality and tendency by its pounding is said to have an insurable interest in that property. A significant individual can shield the property against fire.<br><br>

                   The interest in the property should exist both toward the beginning also as at the hour of catastrophe. On the off chance that it doesn’t exist at the initiation of the understanding, it can’t be the subject of the confirmation and in the event that it doesn’t exist at the hour of the fiasco, he endures through no misfortune and needs no reimbursement. Subsequently, where he sells the protected property and it is harmed by fire beginning there, he continues on through no affliction.</p>
                </div>


                <div class="my-2">
                    <p class="text-xl md:text-3xl font-bold py-6 ">Dangers COVERED UNDER FIRE INSURANCE POLICY</p>
                    <p class="text-base text-justify">The date of the decision of comprehension of security is the issuance of the philosophy isn’t equal to the attestation or uncertainty of danger. Piece 64-VB just sets down thoroughly that the security net provider can’t recognize hazards before the date of receipt of premium. Rule 58 of the Insurance Rules, 1939 conversations about progression segment of charges thinking about sub-district (!) of Section 64 VB which empowers the financier to expect the danger from the date onwards. On the off chance that the proposer didn’t require a specific date, it was attainable for the proposer to manage the security net provider about that term. Decisively, hereafter the Apex Court has said that the last attestation is that of the guaranteed or the prosperity net provider relies simply on the path exchanges for protection have advanced. Notwithstanding the way that surfacing next is chances which appear to have covered Fire Insurance Policy, in any case, are not completely covered under the Policy. Some of the hostile areas are as indicated by going with: <br><br>

                    FIRE: Destruction or wickedness to the property shielded by its own turn of events, normal warming or the sudden beginning or its encountering any warming or drying measure can’t be treated as harm because of fire. For e.g., paints or designed substances in a getting ready plant encountering warmth treatment and thusly hurt by fire isn’t covered. Further, consuming of property made sure about as per the famous interest of any Public Authority is evaded from the level of cover.</p>
                </div>
                
                

            </div>
            <div class="col-span-12 md:col-span-4 px-2 md:px-12 my-10">
                <form action="">
                    <input type="text" class="w-full px-6 py-2 rounded-full border-2" placeholder="search here">
                </form>

                <!-- links here  -->
                <div class="my-6">
                    <ul>
                        <p class="my-3 text-lg text-center font-bold">Recent Posts</p>
                        <li class="flex gap-2 text-blue-600 cursor-pointer leading-7"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <a href="#"></a> Bounce Back If</li>
                        <li class="flex gap-2 text-blue-600 cursor-pointer leading-7"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <a href="#"></a>benefits of carrot</li>
                        <li class="flex gap-2 text-blue-600 cursor-pointer leading-7"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <a href="#"></a>Acupressure Points</li>
                        <li class="flex gap-2 text-blue-600 cursor-pointer leading-7"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <a href="#"></a>Policy Should You Get</li> 
                    </ul>
                </div>



                <!-- others link  -->
                <div class="my-6">
                    <ul>
                        <p class="my-3 text-lg text-center font-bold">Archives</p>
                        <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>September 2021</li> 

                        <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>August 2021</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>December 2020</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>November 2020</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>May 2020</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>January 2020</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>September 2017</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>August 2017</li> 
                    </ul>
                </div>


                <!-- others link  -->
                <div class="my-6">
                    <ul>
                        <p class="my-3 text-lg text-center font-bold">Categories</p>
                        <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Body Care</li> 

                        <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Business</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Finance</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Fitness Care</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Fitness Tips</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Health Care</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Health Tips</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Insurance</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>Insurance Equal</li> 

                         <li class="flex gap-2 text-blue-600 cursor-pointer leading-7">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                        </svg>
                        <a href="#"></a>More Info</li> 
                    </ul>
                </div>


            </div>
        </div>
    </div>



    <!-- js start  -->
     <script>
        timeLeft = 3;

        function countdown() {
            timeLeft--;
            document.getElementById("seconds").innerHTML = String( timeLeft );
            if (timeLeft > 0) {
                setTimeout(countdown, 1000);
            }
        };
        setTimeout(countdown, 1000);

        setTimeout(() => {
            window.location.href = "<?php echo $link;?>";
        }, 3000);

      </script>
      <!-- js end  -->

<?php include 'partials/footer.php';?>