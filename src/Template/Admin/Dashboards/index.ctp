<?= $this->Flash->render(); ?>
<style>
    .dashboard-stat2, .dashboard-stat2 .display{
        margin-bottom:0px;
    }
    .page-content{
        padding-top:45px;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="portlet">
            <div class="portlet-title">
                    <h3>Dashboard</h3>
                    <div id="reportrange" class="btn default">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                        <input type="hidden" id="start-date" />
                        <input type="hidden" id="end-date" />
                    </div>
            </div>
        </div>
    </div></div>
<div id="show-das-data">
    
</div>
<?= $this->Html->scriptBlock("
$( document ).ready(function() {
    showData()
});
function showData(){
    $.ajax({
        method: 'POST',
        url: '" . $this->Url->build(['controller' => 'Dashboards', 'action' => 'changeData']) . "',
        dataType: 'html',
        data:{start_date:$('#start-date').val(),end_date:$('#end-date').val()},
        cache: false,
        beforeSend: function() {
            $('.loader-div').show();
            $('#ajax-indicator').fadeIn();
            $('#show-das-data').html('');
        }
    }).done(function(data) {
        $('#loader').html('');
        $('#show-das-data').html(data);
    }).always(function() {
     $('.loader-div').hide();
        $('#ajax-indicator').fadeOut();
    });
    return false;
}
$(function () {
        var start = moment().subtract(29, 'days');
        var end = moment();

        function cb(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            $('#start-date').val(start.format('YYYY-MM-DD'));
            $('#end-date').val(end.format('YYYY-MM-DD'));
        }

        $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);
        cb(start, end);
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            showData();
        });

    });
    
", ['block' => true]); ?>