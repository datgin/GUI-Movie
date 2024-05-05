<main>
    <div class="statistical mt">
        <div class="box_">
            <a href="?act=thongke">Show All</a>
            <div>
                <i class="fas fa-chart-pie fa-lg" style="color: #277eda"></i>
            </div>
            <div>
                <p>Tổng số đơn hàng</p>
                <span>1234</span>
            </div>
        </div>
        <div class="box_">
            <a href="">Show All</a>
            <div>
                <i class="fas fa-chart-line" style="color: #277eda"></i>
            </div>
            <div>
                <p>Tổng số sản phẩm</p>
                <span>1234</span>
            </div>
        </div>
        <div class="box_">
            <a href="">Show All</a>
            <div><i class="fas fa-chart-bar" style="color: #277eda"></i></div>
            <div>
                <p>Doanh thu hôm nay</p>
                <span>1234</span>
            </div>
        </div>
        <div class="box_">
            <a href="">Show All</a>
            <div>
                <i class="fas fa-chart-area" style="color: #277eda"></i>
            </div>
            <div>
                <p>Khách hàng truy cập</p>
                <span>1234</span>
            </div>
        </div>
    </div>
    <div class="box_ceter mt">
        <div class="column_chart">
            <script type="text/javascript">
                google.charts.load("current", {
                    packages: ["bar"],
                });
                google.charts.setOnLoadCallback(drawStuff);

                function drawStuff() {
                    var data = new google.visualization.arrayToDataTable([
                        ["Move", "Percentage"],
                        ["King's pawn (e4)", 44],
                        ["Queen's pawn (d4)", 31],
                        ["Knight to King 3 (Nf3)", 12],
                        ["Queen's bishop pawn (c4)", 10],
                        ["Other", 3],
                    ]);

                    var options = {
                        width: 400,
                        legend: {
                            position: "none",
                        },
                        bar: {
                            groupWidth: "90%",
                        },
                    };

                    var chart = new google.charts.Bar(
                        document.getElementById("top_x_div")
                    );
                    // Convert the Classic options to Material options.
                    chart.draw(data, google.charts.Bar.convertOptions(options));
                }
            </script>
            <div id="top_x_div" style="width: 400px; height: 200px"></div>
        </div>

        <div class="area_chart">
            <script type="text/javascript">
                google.charts.load("current", {
                    packages: ["corechart"],
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ["Year", "Sales", "Expenses"],
                        ["2013", 1000, 400],
                        ["2014", 1170, 460],
                        ["2015", 660, 1120],
                        ["2016", 1030, 540],
                    ]);

                    var options = {
                        title: "Company Performance",
                        hAxis: {
                            title: "Year",
                            titleTextStyle: {
                                color: "#333",
                            },
                        },
                        vAxis: {
                            minValue: 0,
                        },
                    };
                    var chart = new google.visualization.AreaChart(
                        document.getElementById("chart_div")
                    );
                    chart.draw(data, options);
                }
            </script>
            <div id="chart_div" style="width: 400px; height: 200px"></div>
        </div>
    </div>
</main>