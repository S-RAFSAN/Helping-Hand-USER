<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Helping Hand Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* background-color: #f4f4f4; */
            height: 100vh;
            margin: 0;
            padding: 0;
            background: rgb(167, 254, 255);
            background: linear-gradient(0deg, rgba(167, 254, 255, 1) 0%, rgba(255, 228, 170, 1) 100%);
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .select-checkboxes {
            display: inline-block;
        }

        .select-checkboxes label {
            display: block;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Helping Hand Management System</h2>
        <form id="order-form">
            <div class="form-group">
                <label for="order-details">Your Order:</label>
                <input type="text" id="order-details" name="order-details" placeholder="Enter your order details">
            </div>
            <div class="form-group">
                <label for="service-description">Service description:</label>
                <input type="text" id="service-description" name="service-description"
                    placeholder="Enter service description">
            </div>
            <div class="form-group">
                <label>Service Type:</label>
                <div class="select-checkboxes">
                    <label><input type="checkbox" name="service-type" value="Sweeping floor"> Sweeping floor</label>
                    <label><input type="checkbox" name="service-type" value="Washing Dishes"> Washing Dishes</label>
                    <label><input type="checkbox" name="service-type" value="Doing Laundry"> Doing Laundry</label>
                    <label><input type="checkbox" name="service-type" value="Cleaning Toilet"> Cleaning Toilet</label>
                    <label><input type="checkbox" name="service-type" value="Cooking"> Cooking</label>
                    <label><input type="checkbox" name="service-type" value="Dusting and Polishing"> Dusting and
                        Polishing</label>
                </div>
            </div>
            <div class="form-group">
                <label>Payment Type:</label><br>
                <button type="button" id="online-payment">Online</button>
                <button type="button" id="cash-payment">Cash</button>
            </div>
            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" placeholder="Enter your location">
            </div>
            <div class="form-group">
                <label for="request-timing">Request Timing:</label>
                <select id="request-timing" name="request-timing">
                    <option value="Request Now">Request Now</option>
                    <option value="Request Later">Request Later</option>
                </select>
            </div>
            <div class="form-group" id="datetime-picker" style="display: none;">
                <label for="request-date-time">Request Date & Time:</label>
                <input type="datetime-local" id="request-date-time" name="request-date-time">
            </div>
            <button type="submit">Submit Order</button>
        </form>
    </div>

    <script>
        document.getElementById('request-timing').addEventListener('change', function () {
            var datetimePicker = document.getElementById('datetime-picker');
            if (this.value === 'Request Later') {
                datetimePicker.style.display = 'block';
            } else {
                datetimePicker.style.display = 'none';
            }
        });

        document.getElementById('online-payment').addEventListener('click', function () {
            alert('Online payment selected');
        });

        document.getElementById('cash-payment').addEventListener('click', function () {
            alert('Cash payment selected');
        });
    </script>

</body>

</html>