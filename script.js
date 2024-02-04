window.html2canvas = html2canvas;
window.jsPDF = window.jspdf.jsPDF;

// download function
function downloadDoc() {
      html2canvas(document.querySelector("#salesDoc"),{
            allowTaint: true,
            useCORS: true,
            scale: 1
      }).then(function(canvas) {
            document.body.appendChild(canvas);
            var img = canvas.toDataURL("image/png");
            var doc = new jsPDF("p", "mm", "a4");
            var width = doc.internal.pageSize.getWidth();
var height = doc.internal.pageSize.getHeight();
            doc.addImage(img, "SVG", 0, 0, width, height);
            doc.save();
        });
}