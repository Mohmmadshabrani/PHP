let btns = document.querySelectorAll(".delete-btn");
console.log(22);
btns.forEach((e) => {
  e.addEventListener("click", handler);
});

function handler(e) {
  let row = this.closest("tr");
  let id = row.getAttribute("data-id");
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "delete_record.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    console.log(`xhr.readyState: ${xhr.readyState}`)
    console.log(`xhr.status: ${xhr.status}`)
    console.log(`xhr.responseText: ${xhr.responseText}`)
    if (xhr.readyState === 4 && xhr.status === 200) {
        row.remove();
    }
  };
  xhr.send("id=" + encodeURIComponent(id));
}
