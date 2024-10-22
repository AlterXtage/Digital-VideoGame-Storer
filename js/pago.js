document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('credito').addEventListener('click', function () {
        document.getElementById('credit-card-form').classList.remove('hidden');
    });

    document.getElementById('debito').addEventListener('click', function () {
        document.getElementById('credit-card-form').classList.add('hidden');
    });

    document.getElementById('paypal').addEventListener('click', function () {
        document.getElementById('credit-card-form').classList.add('hidden');
    });

    document.getElementById('cripto').addEventListener('click', function () {
        document.getElementById('credit-card-form').classList.add('hidden');
    });
});
