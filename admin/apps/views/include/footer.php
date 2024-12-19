<input type="hidden" id="site_url" name="site_url" value="<?php echo site_url();?>">
<input type="hidden" id="current_url" name="current_url" value="<?php  echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>">

 
<!-- Required Js -->
<script src="<?=site_url('assets/js/vendor-all.min.js');?>"></script>
<script src="<?=site_url('assets/js/plugins/bootstrap.min.js');?>"></script>
<script src="<?=site_url('assets/js/ripple.js');?>"></script>
<script src="<?=site_url('assets/js/pcoded.min.js');?>"></script> 
<script src="<?=site_url('assets/js/plugins/dropzone-amd-module.min.js');?>"></script>
<script src="<?=site_url();?>assets/js/plugins/lightbox.min.js"></script>
<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#short-desc').summernote({
         height: 200,
          
        
        });
        
            $('#product-desc').summernote({
                height: 300
        });

 $('#page').summernote({
                height: 500
        });

              function sendFile(file, editor, welEditable) {
            data = new FormData();
            data.append("file", file);
            $.ajax({
                data: data,
                type: "POST",
                url: '<?=base_url('category/img');?>',
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    editor.insertImage(welEditable, url);
                }
            });
        }
        });
    </script>
<!-- Apex Chart -->
    <script src="<?=site_url('assets/js/plugins/apexcharts.min.js');?>"></script>
     <!-- DataTable Js -->
    <script src="<?=site_url();?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="<?=site_url();?>assets/js/plugins/dataTables.bootstrap4.min.js"></script> 
    <script>
        // DataTable start
        $('#report-table').DataTable(); 
    </script>
    <!-- <script src="assets/js/pages/todo.js"></script> -->

    <script>
        // [ revenue-map ] start
        $(function() {
            var options = {
                chart: {
                    height: 200,
                    type: 'line',
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 3,
                    curve: 'smooth'
                },
                series: [{
                    name: 'Sales',
                    data: [20, 50, 30, 60, 30, 50, 40]
                }, {
                    name: 'Amount',
                    data: [40, 20, 50, 15, 40, 65, 20]
                }],
                xaxis: {
                    type: 'datetime',
                    categories: ['1/11/2019', '2/11/2019', '3/11/2019', '4/11/2019', '5/11/2019', '6/11/2019', '7/11/2019'],
                },
                colors: ['#448aff', '#9ccc65'],
                fill: {
                    type: 'solid',
                },
                markers: {
                    size: 5,
                    colors: ['#448aff', '#9ccc65'],
                    opacity: 0.9,
                    strokeWidth: 2,
                    hover: {
                        size: 7,
                    }
                },
                grid: {
                    borderColor: '#e2e5e885',
                },
                yaxis: {
                    min: 10,
                    max: 70,
                }
            };
            var chart = new ApexCharts(document.querySelector("#collected-chart"), options);
            chart.render();
        });
        // [ revenue-map ] end
        // [ sales-chart ] start
        $(function() {
            var options = {
                chart: {
                    height: 250,
                    type: 'line',
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                series: [{
                    name: 'Trial',
                    data: [20, 50, 30, 60, 30, 50, 40]
                }, {
                    name: 'Bronze',
                    data: [40, 20, 50, 15, 40, 65, 20]
                }, {
                    name: 'Gold',
                    data: [64, 40, 20, 30, 20, 40, 65]
                }, {
                    name: 'Platinum',
                    data: [30, 25, 40, 15, 20, 15, 30]
                }],
                xaxis: {
                    type: 'datetime',
                    categories: ['1/11/2019', '2/11/2019', '3/11/2019', '4/11/2019', '5/11/2019', '6/11/2019', '7/11/2019'],
                },
                colors: ['#4680ff', '#9ccc65', "#ffba57", "#ff5252"],
                fill: {
                    type: 'solid',
                },
                markers: {
                    size: 5,
                    colors: ['#4680ff', '#9ccc65', "#ffba57", "#ff5252"],
                    opacity: 0.9,
                    strokeWidth: 2,
                    hover: {
                        size: 7,
                    }
                },
                grid: {
                    borderColor: '#e2e5e885',
                },
                yaxis: {
                    min: 10,
                    max: 70,
                }
            };
            var chart = new ApexCharts(document.querySelector("#sales-chart"), options);
            chart.render();
        });
        // [ sales-chart ] end
        // [ Transection ] start
        $(function() {
            var options1 = {
                chart: {
                    type: 'bar',
                    height: 100,
                    sparkline: {
                        enabled: true
                    }
                },
                colors: ["#4680ff"],
                plotOptions: {
                    bar: {
                        columnWidth: '80%'
                    }
                },
                series: [{
                    data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
                }],
                labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                xaxis: {
                    crosshairs: {
                        width: 1
                    },
                },
                tooltip: {
                    fixed: {
                        enabled: false
                    },
                    x: {
                        show: false
                    },
                    y: {
                        title: {
                            formatter: function(seriesName) {
                                return 'Amount'
                            }
                        }
                    },
                    marker: {
                        show: false
                    }
                }
            }
            new ApexCharts(document.querySelector("#transactions1"), options1).render();
            var options2 = {
                chart: {
                    type: 'bar',
                    height: 100,
                    sparkline: {
                        enabled: true
                    }
                },
                colors: ["#ff5252"],
                plotOptions: {
                    bar: {
                        columnWidth: '80%'
                    }
                },
                series: [{
                    data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
                }],
                labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
                xaxis: {
                    crosshairs: {
                        width: 1
                    },
                },
                tooltip: {
                    fixed: {
                        enabled: false
                    },
                    x: {
                        show: false
                    },
                    y: {
                        title: {
                            formatter: function(seriesName) {
                                return 'Sales'
                            }
                        }
                    },
                    marker: {
                        show: false
                    }
                }
            }
            new ApexCharts(document.querySelector("#transactions2"), options2).render();
        });
        // [ Transection ] end
        
      function slug_url(get,id){
            var  data=$.trim(get);
            var string = data.replace(/[^A-Z0-9]/ig, '-')
                            .replace(/\s+/g, '-') // collapse whitespace and replace by -
                            .replace(/-+/g, '-'); // collapse dashes;
            var finalvalue=string.toLowerCase();
            document.getElementById(id).value=finalvalue;
        }

    </script>

</body> 
</html>
