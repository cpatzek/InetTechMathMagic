<?php
    include('master.php');
?>

<div class="container">
    <div class="col-lg-9">

        <!--<div class="form-group">
            <label class="col-md-4 control-label">First Name</label>
            <div class="col-md-6  inputGroupContainer">
                <div class="input-group">
                    <input name="0"  class="form-control" type="text" />
                </div>
            </div>
        </div>-->


        <form class="form-horizontal" action="linearegleichung.php" method="post" id="lgs">
            <fieldset>

                <!-- Form Name -->
                <legend>Lineares Gleichungssystem </legend>

                <!-- Text input-->

                <div class="row">
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="0" maxlength="3" placeholder="x1" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="1" maxlength="3" placeholder="x2" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="2" maxlength="3" placeholder="x3" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="3" maxlength="3" placeholder="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="4" maxlength="3" placeholder="x1" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="5" maxlength="3" placeholder="x2" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="6" maxlength="3" placeholder="x3" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="7" maxlength="3" placeholder="" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="8" maxlength="3" placeholder="x1" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="9" maxlength="3" placeholder="x2" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="10" maxlength="3" placeholder="x3" />
                    </div>
                    <div class="col-xs-2">
                        <input type="text" class="form-control" name="11" maxlength="3" placeholder="" />
                    </div>
                </div>

                <button type="submit" id="remove" class="btn btn-info">Lösen</button>

            </fieldset>

        </form>



  <!--      <form class="form-horizontal" action="php/linearegleichung.php" method="post" id="lgs">
           
            <div>
                <input type="text" name="0" class="form-control" maxlength="5" />
                <label>x1 + </label>
                <input type="text" name="1" maxlength="5" />
                <label>x2 + </label>
                <input type="text" name="2" maxlength="5" />
                <label>x3 = </label>
                <input type="text" name="3" maxlength="5" />
            </div>

            <div>
                <input type="text" name="4" maxlength="5" />
                <label>x1 + </label>
                <input type="text" name="5" maxlength="5" />
                <label>x2 + </label>
                <input type="text" name="6" maxlength="5" />
                <label>x3 = </label>
                <input type="text" name="7" maxlength="5" />
            </div>

            <div>
                <input type="text" name="8" maxlength="5" />
                <label>x1 + </label>
                <input type="text" name="9" maxlength="5" />
                <label>x2 + </label>
                <input type="text" name="10" maxlength="5" />
                <label>x3 = </label>
                <input type="text" name="11" maxlength="5" />
            </div>

            <div>
                <button type="submit">Berechne</button>
            </div>
        </form> -->

    </div>
</div>