<?php
include "/Include/header.php";

?>

<div id="nav-tab-container" class="container-fluid pt-2">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-history" role="tab" aria-controls="pills-history" aria-selected="true">History</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-geography-tab" data-toggle="pill" href="#pills-geography" role="tab" aria-controls="pills-geography" aria-selected="false">Geography</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-eco-tab" data-toggle="pill" href="#pills-eco" role="tab" aria-controls="pills-eco" aria-selected="false">Economy</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-link-tab" data-toggle="pill" href="#pills-link" role="tab" aria-controls="pills-link" aria-selected="false">Links</a>
        </li>
    </ul>
    <div class="tab-content container-fluid border border-dark" id="nav-contents-container">
        <div class="tab-pane fade show active p-0 m-0 row" id="pills-history" role="tabpanel" aria-labelledby="pills-history-tab">
            
            <div id="historyCaro" class="carousel col-12" data-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active container">
                        <img src="https://cdn.pixabay.com/photo/2020/03/19/16/46/panama-4948005_960_720.jpg" class=" " alt="...">
                    </div>
                    <div class="carousel-item container">
                        <img src="https://cdn.pixabay.com/photo/2016/01/19/10/40/panama-1148315_960_720.jpg" class=" " alt="...">
                    </div>
                    <div class="carousel-item container">
                        <img src="https://cdn.pixabay.com/photo/2019/07/28/16/05/old-town-panama-4368938_960_720.jpg" class="" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#historyCaro" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#historyCaro" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <div id="history-data" class="col-12 row">
                <div class="col-6" id="history-info">
                    Information
                </div>
                
                <div id="History-list" class="col-6">
                    
                    <h3>Historical Locations:</h3>
                    
                    <ul class="">
                        <li class="">Panamá Viejo</li>
                        <li class="">San Lorenzo colonial fort</li>
                        <li class="">The Panama Canal</li>
                        <li class="">Metropolitan Natural Park</li>
                    </ul>
                </div>
            </div>
            

        </div>
        <div class="tab-pane fade" id="pills-geography" role="tabpanel" aria-labelledby="pills-geography-tab">
            <div id="GeoCaro" class="carousel col-12" data-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active container">
                        <img src="https://cdn.pixabay.com/photo/2019/05/11/16/22/panama-4195990_960_720.jpg" class=" " alt="...">
                    </div>
                    <div class="carousel-item container">
                        <img src="https://cdn.pixabay.com/photo/2014/05/17/22/49/panama-346610_960_720.jpg" class=" " alt="...">
                    </div>
                    <div class="carousel-item container">
                        <img src="https://cdn.pixabay.com/photo/2020/03/21/09/43/panama-4953175_960_720.jpg" class="" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#GeoCaro" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#GeoCaro" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            
            <div id="Geo-data" class="col-12 row">
                <div class="col-6" id="Geo-info">
                    Information
                </div>
                
                <div id="Geo-list" class="col-6">
                    
                    <h3>Interesting Geology:</h3>
                    <pre>
                        <table>
                        <tr>
                          <th>Type</th>
                          <th> </th>
                          <th>Item</th>
                        </tr>
                        <tr>
                          <td>Forest</td>
                          <th> </th>
                          <td>tropical rainforests,cool montane forests.</td>
                        </tr>
                        <tr>
                          <td>Land</td>
                          <th> </th>
                          <td>savannas, tidal lands covered by stilted mangrove trees.</td>
                        </tr>
                        <tr>
                          <td>Water</td>
                          <th> </th>
                          <td>coral reefs, and beaches.</td>
                        </tr>
                        
                      </table>
                    </pre>
                    
                </div>
            </div>
            
            
        </div>
        <div class="tab-pane fade" id="pills-eco" role="tabpanel" aria-labelledby="pills-eco-tab">
            <div id="EcoCaro" class="carousel col-12" data-ride="carousel" >
                <div class="carousel-inner">
                    <div class="carousel-item active container">
                        <img src="https://cdn.pixabay.com/photo/2018/04/20/23/37/city-3337337_960_720.jpg" class=" " alt="...">
                    </div>
                    <div class="carousel-item container">
                        <img src="https://cdn.pixabay.com/photo/2013/09/16/19/18/panama-182959_960_720.jpg" class=" " alt="...">
                    </div>
                    <div class="carousel-item container">
                        <img src="https://cdn.pixabay.com/photo/2017/02/24/18/04/landscape-2095783_960_720.jpg" class="" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#EcoCaro" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#EcoCaro" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <div id="eco-data" class="col-12 row">
                <div class="col-6" id="eco-info">
                    Information
                </div>
                
                <div id="eco-list" class="col-6">

                    <table class="table table-bordered border-dark">
                        <thead class="">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">currency</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >1</td>
                                <td>Coins</td>
                            </tr>
                            <tr>
                                <td >2</td>
                                <td>Notes</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Stocks</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            
            
        </div>
        <div class="tab-pane fade" id="pills-link" role="tabpanel" aria-labelledby="pills-link-tab">
            <div class="list-group" id="links">
                <a href="https://www.insightguides.com/destinations/central-america-caribbean/panama/top-attractions" class="list-group-item list-group-item-action mb-3 mt-3">insightguides</a>
                <a href="https://theculturetrip.com/central-america/panama/articles/the-most-popular-landmarks-and-historic-monuments-in-panama/" class="list-group-item list-group-item-action mb-3 ">Culture Trip</a>
                <a href="https://www.britannica.com/place/Panama/Climate" class="list-group-item list-group-item-action mb-3 ">britannica</a>
                <a href="https://pixabay.com/" class="list-group-item list-group-item-action mb-3 ">pixabay</a>
            </div>
        </div>
    </div>
</div>



<?php

include "/Include/footer.php";
?>