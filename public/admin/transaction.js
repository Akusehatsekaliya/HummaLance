document.getElementById('printButton').addEventListener('click', function() {
    const modal = document.getElementById('modalTransactions');

    if (modal) {
        window.print();
    } else {
        console.error('Modal content not found for printing');
    }
});
