<?php include "inc/header.php";?>
<aside>
    <section class="content" style="padding: 10px;">
        <div class="row">
            <section class="col-xs-12 connectedSortable">
                <div style="color: black; background: #a6d7ff; padding: 8px; border: 2px solid #055d9c; margin-bottom:5px;"
                    class="no_print">
                    <form id="due_bill_form">
                        <div class="box-body">
                            <p style="font-size: 20px; margin: 0px; padding: 0px;
                               color: green; font-weight: bolder; text-align: center;">
                                Due Bill Info
                            </p>
                            <div class="row">
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="client_reseller">Dish Line / ISP</label></font>
                                    <select name="client_reseller" id="client_reseller" class="form-control">
                                        <option value="">-- Select --</option>
                                        <option value="Client">Dish Line</option>
                                        <option value="Reseller">ISP</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <font color="red"><label for="area">Area</label></font>
                                    <select name="area" id="area" class="form-control">
                                        <option value="">-- Select --</option>
                                        <option value="56">
                                            শিবপুর বাজার </option>
                                        <option value="62">
                                            সোনাপুর </option>
                                        <option value="63">
                                            কড়ই বাড়ি </option>
                                        <option value="64">
                                            ঢেকা পাড়া </option>
                                        <option value="65">
                                            বাজকোলা আদিবাসী পাড়া </option>
                                        <option value="66">
                                            বাজকোলা </option>
                                        <option value="67">
                                            ঠে্ংগাহার </option>
                                        <option value="68">
                                            Shibpur bajar </option>
                                        <option value="69">
                                            Degepara </option>
                                        <option value="70">
                                            শাশল বাজার </option>
                                        <option value="71">
                                            sisa bazar </option>
                                        <option value="72">
                                            sisa mollapara </option>
                                        <option value="73">
                                            sisa sahu para </option>
                                        <option value="74">
                                            douash </option>
                                        <option value="75">
                                            vobanipur </option>
                                        <option value="76">
                                            soriala para </option>
                                        <option value="77">
                                            tilna </option>
                                        <option value="78">
                                            nosnahar </option>
                                        <option value="79">
                                            Chakla para </option>
                                        <option value="80">
                                            Tokipur </option>
                                        <option value="81">
                                            Bamoil Bazar </option>
                                        <option value="82">
                                            Bajitpur </option>
                                        <option value="83">
                                            rohima pur </option>
                                        <option value="84">
                                            noshahar </option>
                                        <option value="85">
                                            buram baja </option>
                                        <option value="86">
                                            sorealla </option>
                                        <option value="87">
                                            sata </option>
                                        <option value="88">
                                            bajkola </option>
                                        <option value="89">
                                            Nazipur </option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="generate_month">Month</label>
                                    <select name="generate_month" id="generate_month" class="form-control">
                                        <option selected="" value="October">October</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12">
                                    <label for="generate_year">Year</label>
                                    <select name="generate_year" id="generate_year" class="form-control">
                                        <option value="2019">2019</option>
                                        <option selected="" value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-2 col-xs-12" style="margin-top: 25px;">
                                    <button type="submit" class="pull-left btn btn-success">Search <i
                                            class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="view_table"></div>
            </section>
        </div>
    </section>
</aside>
<?php include "inc/footer.php";?>