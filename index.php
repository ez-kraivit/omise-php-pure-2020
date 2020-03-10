<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <img src="https://www.prachachat.net/wp-content/uploads/2018/06/mar05070661p1-728x414.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ครีมอาบน้ำ</h5>
                <p class="card-text">เหมาะสำหรับเด็กและผู้ใหญ่</p>
                <form id="checkoutForm" method="POST" action="Checkout.php">
                    <input type="hidden" name="omiseToken">
                    <input type="hidden" name="omiseSource" value="ขายของราคาถูก">
                    <a href="#" class="btn btn-primary" id="checkoutButton">120 THB</a>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.omise.co/omise.js">
    </script>
    <script>
        OmiseCard.configure({
            publicKey: "นำคีย์ของท่านมาใส่"
        });

        var button = document.querySelector("#checkoutButton");
        var form = document.querySelector("#checkoutForm");

        button.addEventListener("click", (event) => {
            event.preventDefault();
            OmiseCard.open({
                amount: 12345,
                currency: "THB",
                defaultPaymentMethod: "credit_card",
                onCreateTokenSuccess: (nonce) => {
                    if (nonce.startsWith("tokn_")) {
                        form.omiseToken.value = nonce;
                    } else {
                        form.omiseSource.value = nonce;
                    };
                    form.submit();
                }
            });
        });
    </script>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
