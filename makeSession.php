        <div class="form col-lg-4 col-md-6 col-sm-8" id='test'>
        <div class="myCon">
            <h2 class="title"><i class="fa fa-bullseye"></i>Add New Session</h2>
                <form action="" class="signUp" method="post" autocomplete="off">

                    <div class="row">
                        <div class="drob-down">
                            <div class="contain">
                                <span class="title">
                                    SelectBox
                                </span>
                                <ul>
                                    <li>Option 1</li>
                                    <li>Option 2</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="firstName col-6">
                            <label for="sessionName" class="col-12">Session Name</label>
                            <div class="border">
                                <input type="text" name="sessionName" class="col-12" placeholder='more than 3 chars'/>
                            </div>
                        </div>
                        <div class="lastName col-6">
                            <label for="startPrice" class="col-12">Start price</label>
                            <div class="border">
                                <input type="text" name="startPrice" class="col-12"  placeholder='100 EGP'/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="email col-12">
                            <label for="itemName" class="col-12">product Name</label>
                            <div class="border">
                                <input type="text" name="itemName" class="col-12"  placeholder='Enter Product Name'/>
                            </div>
                        </div>    
                    </div>
                                
                    <div class="row">
                        <div class="firstName col-6">
                            <label for="startTime" class="col-12">Start Time</label>
                            <div class="border">
                                <input type="date" name="startTime" class="col-12" placeholder='more than 3 chars'/>
                            </div>
                        </div>
                        <div class="lastName col-6">
                            <label for="endTime" class="col-12">End time</label>
                            <div class="border">
                                <input type="date" name="endTime" class="col-12"  placeholder='100 EGP'/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4"><p class='gen'>Auto Sell</p></div>
                                    <div class="col-4">
                                        <div class="switch" data-off="-15px" data-on="-60px" data-name="autoSell" data-tar="false"></div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4"><p class='gen'>Blind Time</p></div>
                                <div class="col-4">
                                    <div class="switch" data-off="-15px" data-on="-60px" data-name="blind" data-tar="false"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                           <div class="row">
                               <div class="col-4"><p class='gen'>Private</p></div>
                                <div class="col-4">
                                    <div class="switch" data-off="-15px" data-on="-60px" data-name="private" data-tar="false"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 ">
                            <div class="row">
                                <label for="increament" class="col-3">increament</label>
                                <input type='range' value="0"  min="3" max="30" step = "0.1" class="col-7"/>
                                <span id="val" class="col-1">0</span>
                                <span class="col-1">%</span>
                            </div>
                            <!--
                            <select name="increament" class="test">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="30">30</option>
                            </select>
    -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="userName col-12">
                            <label for="userName" class="col-12">Image</label>
                            <div class="border">
                                <input type="file" class="col-12" name="images"  placeholder='eg. mr.robot'/>
                            </div>
                        </div>    
                    </div>

                    <div class="row">
                        <div class="phone col-12">
                            <label for="phoneNumber" class="col-12">Tags</label>
                            <div class="border">
                                <input type="text" class="col-12 tagsInput" placeholder='Enter Tags'/>
                                <input type="hidden" class="setTags" name="tags"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tags">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 ">
                            <label for="increament">Categories</label>
                            <select name="categories" id="">
                                <?php
                                    $test = new dataBase("localhost", "mazad", "root", "1234A");
                                    $test->setTable('categorie');
                                    $allData = $test->select();
                                    for($i=0;$i<sizeof($allData);$i++){
                                        echo "<option value=";
                                        echo $allData[$i]['sessionName'];
                                        echo ">";
                                        echo $allData[$i]['sessionName'];
                                        echo "</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="sup">
                        <input type="submit" value = "Add Session"/>
                    </div>
                </form>
            </div>
            <p>
                * By signing up, you agree to receive Stox emails, newsletters & updates.
            </p>
        </div>
