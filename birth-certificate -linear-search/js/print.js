function printData() {
  let body = document.getElementById("body").innerHTML;
  let printSection = document.getElementById("print-section").innerHTML;
  document.getElementById("body").innerHTML = printSection;
  window.print();
  document.getElementById("body").innerHTML = body;
}
