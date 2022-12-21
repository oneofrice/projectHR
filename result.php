<?php
include "header.php";
?>

<div class="container-fluid header-space">
    <div class="row">
        <div class="col-md-3 left-result-text">
            <h1 class="percent-style" id="not_change">%</h1>
            <h6 class="result-text-style">The probability that you will not change job</h6>
        </div>
        <div class="col-md-4">
            <div class="bg-white container">
                <canvas id="myChart" class="chart-style"></canvas>

                <button class="button-enter" onclick="location.href='research.php';">
                    ENTER NEW DATA
                </button>
            </div>

        </div>
        <div class="col-md-3 right-result-text">
            <h1 class="percent-style" id="change">%</h1>
            <h6 class="result-text-style">The probability that you will change job</h6>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>
