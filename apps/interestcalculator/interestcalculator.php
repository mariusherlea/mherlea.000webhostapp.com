<?php
include '../include/header.php';
?>

    <body class="bg-dark">

    <table class="table table-dark ">
        <thead>

        </thead>

        <tbody >
        <tr>
            <td> <label for="sum">Sum:</label>
                <input type="number" id="sum"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="rateofinterest">Rate of interest:</label>
                <input type="number" id="rateofinterest"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="time">Time of deposit:</label>
                <input type="number" id="time"/>
            </td>
        </tr>
<tr>
    <td>
        <div id="calc-actions">
            <button type="button" id="btn-calc">Calculate</button>

        </div>
    </td>
</tr>
        <tr>
            <td>
                <h2>Interest: <span id="current-calculation">0</span></h2>
                <h2>Total: <span id="current-result">0</span></h2>

            </td>
        </tr>

        </tbody>

    </table>




                <script src="assets/scripts/vendor.js"></script>
                <script src="assets/scripts/app.js"></script>



    </body>

<?php
include '../include/footer.php';
?>