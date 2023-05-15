var inactivityTime = function () {
    var t;
    window.onload = resetTimer;
    document.onmousemove = resetTimer;
    document.onkeydown = resetTimer;
  
    function resetTimer() {
        clearTimeout(t);
        t = setTimeout(showModal, 180000); // Defina o tempo de inatividade em milissegundos
    }
};

function showModal() {
        var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
          keyboard: false
        })
        myModal.show()
      }

inactivityTime();
