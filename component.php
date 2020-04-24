<?php
function component(){
    $element="
    <form action=\"shoppe.php\" method=\"post\">
                <div class=\"card shadow\">
                    <div>
                        <img src=\"images/bag.jpg\" alt=\"image1\" class=\"img-fluid card-img-top\">
                    </div>
                    <div class=\"card-body\">
                        <h5 class=\"Card-title\">BaG 1</h5>
                        <h6>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"fas fa-star\"></i>
                            <i class=\"far fa-star\"></i>
                        </h6>
                        <p class=\"card-text\">
                            Some quick text for description
                        </p>
                        <h5>
                            <small><s>kes 350</s></small>
                            <br>
                            <spn class=\"price\">kes 3000</spn>
                        </h5>

                        <button type=\"submit\" class=\"btn btn-info my-3\" name=\"add\">Add to cart<i class=\"fas fa-shopping-cart\"></i></button>

                        </button>
                    </div>
                </div>
            </form>";

    echo $element;
}
