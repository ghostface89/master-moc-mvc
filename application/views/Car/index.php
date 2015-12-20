<form >
<div class="clearfix">
    <div >Cars</h2></div>
    <ul>

    </ul>
</div>

<div >
<div>
    <div >
        <h3>Filter</h3>
<!--        --><?//= dd($aCars); ?>

        <fieldset>
            <ol class="collapsable">
                <li>
                    <label for="car">Car:</label>
                    <select id="car" name="car">
                        <option value="0">-- All Cars --</option>
<!--                        --><?php //foreach ($aCars as $iKey => $aCar) { ?>
<!--                            <option value="--><?php //echo htmlspecialchars($aCar['Vmy']['id'], ENT_QUOTES, 'UTF-8');?><!--">--><?php //echo htmlspecialchars($aCar['Vmy']['make'], ENT_NOQUOTES, 'UTF-8');?><!--</option>-->
<!--                        --><?php //} ?>
                    </select>
                </li>

                <li class="submit">

                </li>
            </ol>
        </fieldset>
    </div>
</div>
        <table >
            <thead>
            <tr>
                <th>ID</th>
                <th>make</th>
                <th>model</th>
                <th>year</th>

            </tr>
            </thead>
            <tbody>
                <?php foreach ($aCars as $iKey => $aCar) { ?>
                    <tr>

                        <td ><?=$aCar['Vmy']['id']?></td>
                        <td ><?=$aCar['Vmy']['make']?></td>
                        <td ><?=$aCar['Vmy']['model']?></td>
                        <td ><?=$aCar['Vmy']['year']?></td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
<!--    <div class="pagination_statisctis_holder">-->
<!--        --><?php //if ((bool)$aValues['bStatistics'] == true):?>
<!--            <div class="statistics_holder">-->
<!--                --><?php //foreach ($aLocaleStatistics as $sCurrency => $aStat) { ?>
<!--                    <p>--><?//=$sCurrency;?><!-- Cashback: <strong>--><?//=$aStat['FaceValue'];?><!--</strong>, Commission: <strong>--><?//=$aStat['CostValue'];?><!--</strong>, Spend: <strong>--><?//=$aStat['OrderValue'];?><!--</strong> (--><?//=$aStat['AdjustValue'];?><!-- adjusted)</p>-->
<!--                --><?php //} ?>
<!--            </div>-->
<!--        --><?php //endif; ?>
<!---->
<!--        --><?php //if(isset($sPaginationLinks)):?>
<!---->
<!--            <div class="pagination_holder clearfix">-->
<!--                <div class="rounded_block_inner clearfix">-->
<!--                    <div class="page_search_item float_left">-->
<!--                        --><?//= $sPaginationLinks?>
<!--                    </div>-->
<!--                    <div class="float_right">-->
<!--                        <div class="page_search_item">-->
<!--                            <label for="number_per_page" class="page_search_label">Items per page</label>-->
<!--                            <select name="iTxCount" id="number_per_page">-->
<!--                                --><?php //for ( $iCount = 10; $iCount < 50; $iCount = $iCount * 2 ) :?>
<!--                                    <option value="--><?php //echo $iCount ?><!--" --><?//=($iCount == $iTxCount ? ' selected="selected"' : '')?><!-->--><?php //echo $iCount ?><!--</option>-->
<!--                                --><?php //endfor; ?>
<!--                            </select>-->
<!--                        </div>-->
<!--                        <div class="page_search_item">-->
<!--                            <label for="page_number_field" class="page_search_label">Go to page</label>-->
<!--                            <input type="text" name="Page" value="--><?php //echo $iTxPage ?><!--" id="page_number_field"/>-->
<!--                        </div>-->
<!--                        <button type="submit" class="button_new button_new_green">Go</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        --><?php //endif; ?>
<!--    </div>-->

</div>
</form>
<script>
    $(document).ready(function() {

        <?php if ($aValues['bFilter'] == true) { ?>
        $('ol.collapsable > li:not(.submit)').toggle();
        <?php } ?>

        $("a[href='#toggleSearch']").click(function() {
            $('ol.collapsable > li:not(.submit)').show();
            $("button[name='bFilter']").show();
            $(this).hide();
        });

        var bLock = false;

        $("#transaction-search").submit( function() {
            if (bLock == false) {
                bLock = true;
            }
            else {
                return false;
            }
        });

        $('#sDateTo').focus(function() {
            if($('#sDateTo').val() == ""){
                $('#sDateTo').val($('#sDateFrom').val());
            }
        });

        $("#bExportTransaction").click( function() {
            // After 10 seconds, close the Loading dialog for Export, because it doesn't close after finishs the export
            setTimeout(function() { $('#dialog-message-loading').dialog("close"); }, 10000);
        });

    });
</script>
