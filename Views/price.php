<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Price Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        /* align-items: center; */
        height: 100vh;
        background: linear-gradient(0deg, rgba(167,254,255,1) 0%, rgba(255,228,170,1) 100%);
        margin-top: 200px;
        }
    .headPrice{
        color: #1BCEFF;
        margin-bottom: 50px;
        
    }
    .options {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
    }
    .option {
        margin-bottom: 10px;
    }
    .scroll-wheel {
        width: 200px;
        height: 30px;
        overflow: hidden;
        position: relative;
        background: #FFAD30;
    }
    .scroll-wheel input[type=range] {
        width: 100%;
        height: 100%;
        background-color: transparent;
        -webkit-appearance: none;
        appearance: none;
        outline: none;
        position: absolute;
        bottom: 0;
        transform: rotateX(180deg);
        margin: 0;
    }
    .scroll-wheel input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        background-color: #007bff;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        z-index: 1;
    }
    .price {
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

</style>
</head>
<body>
    <div class="options">
        <div class="option">
            <h1 class="headPrice" >Check Price</h1>
            <h2>Hourly</h2>
            <div class="scroll-wheel">
                <input type="range" min="1" max="24" value="1" step="1">
            </div>
            <div class="price">$<span id="hourlyPrice">10</span>/hour</div>
        </div>
        <div class="option">
            <h2>Monthly</h2>
            <div class="scroll-wheel">
                <input type="range" min="1" max="30" value="1" step="1">
            </div>
            <div class="price">$<span id="monthlyPrice">200</span>/month</div>
        </div>
    </div>

    <script>
        const hourlyRange = document.querySelector('#hourlyPrice');
        const monthlyRange = document.querySelector('#monthlyPrice');
        
        document.querySelectorAll('.scroll-wheel input[type="range"]').forEach(item => {
            item.addEventListener('input', function() {
                const value = this.value;
                if (this.parentNode.parentNode.querySelector('h2').textContent === 'Hourly') {
                    hourlyRange.textContent = value * 10;
                } else {
                    monthlyRange.textContent = value * 200;
                }
            });
        });
    </script>
</body>
</html>
