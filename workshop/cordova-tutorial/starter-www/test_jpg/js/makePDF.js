$(function () {
    $("#go").click(function() {
        html2canvas(document.getElementById("target"), {
            onrendered: function (canvas) {
                var dataURI = canvas.toDataURL("image/jpeg");

                var pdf = new jsPDF();

                pdf.addImage(dataURI, 'JPEG', 0, 0);
                pdf.save('sample.pdf');
            }
        });        
    });
});

