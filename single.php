<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Article</title>
</head>
<body>
    <header>
        <nav class="bg-header epilogue font-nav-bar">
            <div class="d-flex flex-row text-light">
                <div class=""></div>
                <div class="menu-logo text-center pl-2 mx-5 py-3">Blogful</div>
                <div class="d-flex flex-row">
                    <div class="menu-item text-center mt-3 ms-5 me-4"><a class="active" href="home.html">All</a></div>
                    <div class="menu-item text-center mt-3 mx-4">Culture</div>
                    <div class="menu-item text-center mt-3 mx-4">Ideas</div>
                    <div class="menu-item text-center mt-3 mx-4">Technology</div>
                    <div class="menu-item text-center mt-3 mx-4"><a href="blog.html">Blog</a></div>
                    <div class="menu-item text-center mt-3 mx-4"><a href="contact.html">Contact</a></div>
                    <svg class="menu-item text-center my-4 mx-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="22.03" height="24" stroke-width="2"> <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path> <path d="M21 21l-6 -6"></path> </svg> 
                </div>
            </div>
        </nav>
    </header>
    <div class="container p-article">
        <div class="row">
            <a href="home.html">
            <div class="col-12"></div>
                <h3 id="back" class="epilogue">            
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg>
                    Back
                </h3>
            </a>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="big-h1">Better Forms with Input Types, Auto-Complete, and Validation</h1>
            </div>
        </div>
        <div class="row">
            <img src="img/img-man.png" alt="" class="img-man col-6">
            <div class="col-6">
                <div class="row opacity-40">
                    <p class="mb-2">Lorenzo Hamers | Product designer</p>
                </div>
                <div class="row opacity-40">
                    <p>October 13,2022 | 4 min read</p>
                </div>
            </div>
        </div>
        <div class="row">
            <img src="img/image02.png" alt="" class="mb-5">
        </div>
        <div class="row">
            <div class="col-10 mt-2">
                <p class="opacity-60">Hotspot Hints Help Guide Users Navigate Through a Prototype, Anima allows designers to create high-fidelity prototypes inside Sketch, Adobe XD, and Figma, and export HTML & CSS in a single click.</p>
            </div>
            <div class="col-2 mt-2 d-flex justify-content-end">
                <button class="btn text-info border-2 border-info rounded-pill my-4">Ideas</button>
            </div>
        </div>
    </div>
    <div class="container p-article">
        <div class="row">
            <h2 class="mb-4">Why use Input Types?</h2>
        </div>
        <div class="row border-bottom border-2 pb-5">
            <p class="opacity-60 p-input-text ">
                By specifying which input type an input field is intended for, your prototype feels much more real.
                For example, by specifying that an input field is intended for Email, the browser will let the user know if the email they entered isn’t a valid email address. This is called “form validation”.
                Design to code, automated<br>
                One of the most unique features in Anima is the ability to have live forms inside your design. Anima supports four different input types:
                Email, Password, Text, Number. Also, if users have their email stored in their browser data, then the browser will suggest Auto-Complete and enter their full email into the field automatically.
                If you use Anima for a real live website, this will likely increase conversion as it makes it easier for users to sign up.<br>
                <br>
                <br>
                Required Feature<br>
                Another great new feature is the “required” checkbox. If the field is required, then trying to submit the form without it will present an alert asking the user to fill out that field.<br>
                <br>
                <br>
                How does it work?<br>
                1. Design your form in Sketch, Adobe XD, or Figma(or use our demo file)<br>
                2. Choose the wanted field and define its purpose (email, password, etc.) by pressing on the “forms” button<br>
                3. Export your form to HTML or CSS in one single click and see the magic<br>
                When you’re done designing your form, you can publish it or export your page to working HTML and CSS code.
            </p>
        </div>
    </div>
    <div class="container p-article">
        <div class="row border-bottom border-2 pb-5">
            <h2 class="d-flex justify-content-center pb-3">Related posts</h2>
            <div class="row ">
                <div class="col-12 col-md-6 pb-5">
                    <div class="row">
                        <img src="img/image10.png" alt="" class="sm-img">
                        <p class="text-center text-info border border-info rounded-pill mt-3 col-3">Technology</p>
                        <div class="row">
                            <div class="width-470">
                                <p class="opacity-40">Jessica Cordoba | Fronted Developer | 5 min read</p>
                                <p class="opacity-40">July 4,2022</p>
                            </div>
                            <div class="width-470">
                                <h3>Introducing Anima + Figma</h3>
                                <p class="opacity-60">How to add a Lottie animation to a prototype in Sketch, Adobe XD or Figma</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 pb-5">
                    <div class="row">
                        <img src="img/image11.png" alt="" class="sm-img">
                        <p class="text-center text-info border border-info rounded-pill mt-3 col-3">Technology</p>
                        <div class="row">
                            <div class="width-470">
                                <p class="opacity-40">Lorenzo Hamers | Product designer | 2 min read</p>
                                <p class="opacity-40">October 13,2022</p>
                            </div>
                            <div class="width-470">
                                <h3>Better Forms with Input Types, Auto-Complete, and Validation</h3>
                                <p class="opacity-60">Anima allows designers to create high-fidelity prototypes inside all design tools.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer p-article">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="row">
                    <h1>Blogful</h1>
                </div>
                <br>
                <div class="row">
                    <h1><a href="blog.html">Blogs</a></h1>
                    <h1><a href="contact.html">Contact</a></h1>
                    <h1>Quick Links</h1>
                </div>
            </div>
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-5">
                <div class="row">
                    <h1>Subscribe for Newsletter</h1>
                    <p>Get our hand-picked discoveries & articles delivered right to your inbox.</p>
                </div>
                <div class="row">
                    <div class="col-9">
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email Address">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="rounded-1 show-more">SUBMIT</button>
                    </div>
                </div>
                <br>
                <div class="row">
                    <h1>Follow on</h1>
                </div>
                <div>  
                    <svg class="mx-2" href="#" fill="#000000" width="32px" height="32px" viewBox="-1.5 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m13.93 11.4c-.054.633-.582 1.127-1.224 1.127-.678 0-1.229-.55-1.229-1.229s.55-1.229 1.228-1.229c.683.029 1.225.59 1.225 1.277 0 .019 0 .037-.001.056v-.003zm-5.604-1.33c-.688.061-1.223.634-1.223 1.332s.535 1.271 1.218 1.332h.005c.683-.029 1.225-.59 1.225-1.277 0-.019 0-.037-.001-.056v.003c.001-.02.002-.043.002-.067 0-.685-.541-1.243-1.219-1.269h-.002zm12.674-7.598v21.528c-3.023-2.672-2.057-1.787-5.568-5.052l.636 2.22h-13.609c-1.359-.004-2.46-1.106-2.46-2.466 0-.002 0-.004 0-.006v-16.224c0-.002 0-.004 0-.006 0-1.36 1.101-2.462 2.459-2.466h16.081c1.359.004 2.46 1.106 2.46 2.466v.006zm-3.42 11.376c-.042-2.559-.676-4.96-1.77-7.086l.042.09c-.924-.731-2.088-1.195-3.358-1.259l-.014-.001-.168.192c1.15.312 2.15.837 3.002 1.535l-.014-.011c-1.399-.769-3.066-1.222-4.839-1.222-1.493 0-2.911.321-4.189.898l.064-.026c-.444.204-.708.35-.708.35.884-.722 1.942-1.266 3.1-1.56l.056-.012-.12-.144c-1.284.065-2.448.529-3.384 1.269l.012-.009c-1.052 2.036-1.686 4.437-1.728 6.982v.014c.799 1.111 2.088 1.826 3.543 1.826.041 0 .082-.001.123-.002h-.006s.444-.54.804-.996c-.866-.223-1.592-.727-2.093-1.406l-.007-.01c.176.124.468.284.49.3 1.209.672 2.652 1.067 4.188 1.067 1.191 0 2.326-.238 3.36-.668l-.058.021c.528-.202.982-.44 1.404-.723l-.025.016c-.526.703-1.277 1.212-2.144 1.423l-.026.005c.36.456.792.972.792.972.033.001.072.001.111.001 1.461 0 2.755-.714 3.552-1.813l.009-.013z"></path></g></svg>
                    <svg class="mx-2" href="#" fill="#000000" width="42px" height="42px" viewBox="-5.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>facebook</title> <path d="M1.188 5.594h18.438c0.625 0 1.188 0.563 1.188 1.188v18.438c0 0.625-0.563 1.188-1.188 1.188h-18.438c-0.625 0-1.188-0.563-1.188-1.188v-18.438c0-0.625 0.563-1.188 1.188-1.188zM14.781 17.281h2.875l0.125-2.75h-3v-2.031c0-0.781 0.156-1.219 1.156-1.219h1.75l0.063-2.563s-0.781-0.125-1.906-0.125c-2.75 0-3.969 1.719-3.969 3.563v2.375h-2.031v2.75h2.031v7.625h2.906v-7.625z"></path> </g></svg>
                    <svg class="mx-2" href="#" width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 23C18.0751 23 23 18.0751 23 12C23 5.92487 18.0751 1 12 1C5.92487 1 1 5.92487 1 12C1 18.0751 5.92487 23 12 23ZM5.14386 17.8201C3.81099 16.2515 3.00683 14.2197 3.00683 12L3.00683 11.9978C6.61307 11.9618 9.57567 11.4838 12.2422 10.5779C12.4668 11.0605 12.6847 11.5534 12.8956 12.0564C12.5555 12.1691 12.221 12.2949 11.8918 12.4335C9.24177 13.5489 7.00538 15.4612 5.14386 17.8201ZM6.60614 19.1967C8.10884 20.3248 9.97636 20.9932 12 20.9932C13.2188 20.9932 14.3809 20.7507 15.4409 20.3114C14.9668 18.0368 14.352 15.907 13.6265 13.9217C13.3003 14.0264 12.9807 14.1451 12.6677 14.2768C10.356 15.2499 8.33843 16.9649 6.60614 19.1967ZM15.5924 13.4765C16.2479 15.3019 16.8129 17.2399 17.267 19.2902C19.048 18.0013 20.338 16.0757 20.8032 13.8473C18.9143 13.3589 17.1821 13.2604 15.5924 13.4765ZM14.8575 11.5662C16.754 11.2412 18.7996 11.3067 20.9917 11.8332C20.9578 9.97415 20.3599 8.25291 19.3619 6.8334C17.6358 8.0531 15.9276 9.06168 14.1111 9.85398C14.3687 10.4121 14.6177 10.9829 14.8575 11.5662ZM11.3457 8.76846C8.99734 9.53429 6.39047 9.94463 3.2312 9.9948C3.85725 7.24565 5.74294 4.97565 8.24906 3.82401C9.34941 5.31262 10.3933 6.96064 11.3457 8.76846ZM13.2302 8.05623C14.8876 7.34152 16.4466 6.43089 18.0282 5.32624C16.4333 3.88469 14.3192 3.00683 12 3.00683C11.4014 3.00683 10.8165 3.06531 10.2506 3.17688C11.3103 4.66337 12.3129 6.28992 13.2302 8.05623Z" fill="#0F0F0F"></path> </g></svg>                   
                    <a href="https://www.instagram.com/rubenramonb_/"><svg class="mx-2" href="#" width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="#0F0F0F"></path> <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="#0F0F0F"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="#0F0F0F"></path> </g></svg></a>
                    <svg class="mx-2" href="#" width="35px" height="35px" viewBox="0 -3.5 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>behance [#163]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-100.000000, -7482.000000)" fill="#000000"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M56.981,7324.11726 L62.069,7324.11726 L62.069,7322.65997 L56.981,7322.65997 L56.981,7324.11726 Z M59.489,7327.04322 C58.354,7327.04322 57.492,7327.74656 57.409,7329.04584 L61.481,7329.04584 C61.205,7327.50385 60.52,7327.04322 59.489,7327.04322 L59.489,7327.04322 Z M59.648,7333.06968 C60.696,7333.06968 61.465,7332.40764 61.622,7331.84992 L63.826,7331.84992 C63.196,7333.86701 61.895,7335 59.559,7335 C56.578,7335 54.905,7332.87964 54.905,7330.06626 C54.905,7323.44077 64.465,7323.20323 63.985,7330.68491 L57.409,7330.68491 C57.473,7332.20418 58.1,7333.06968 59.648,7333.06968 L59.648,7333.06968 Z M49.73,7332.77842 C50.933,7332.77842 51.775,7332.31572 51.775,7331.06705 C51.775,7329.77191 51.031,7329.21006 49.782,7329.21006 L46.768,7329.21006 L46.768,7332.77842 L49.73,7332.77842 Z M49.571,7327.26218 C50.572,7327.26218 51.263,7326.79638 51.263,7325.71399 C51.263,7324.57377 50.459,7324.22158 49.36,7324.22158 L46.768,7324.22158 L46.768,7327.26218 L49.571,7327.26218 L49.571,7327.26218 Z M49.924,7322 C52.295,7322 53.943,7322.7839 53.943,7325.22237 C53.943,7326.42973 53.458,7327.32931 52.233,7327.93557 C53.801,7328.40137 54.543,7329.62422 54.543,7331.23127 C54.543,7333.78232 52.52,7335 50.1,7335 L44,7335 L44,7322 L49.924,7322 Z" id="behance-[#163]"> </path> </g> </g> </g> </g></svg>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>