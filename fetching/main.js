function getData() {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "data.php", true);

  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      try {
        console.log(xhr.responseText);
        populateDiv(JSON.parse(xhr.responseText));
      } catch (error) {
        console.error("Error parsing JSON:", error);
      }
    }
  };

  xhr.send();
}

function populateDiv(data) {
  console.log(data);
  let table = document.querySelector('.table');
  let html = "<table><th>ID</th><th>Email</th>";
  data.forEach((i) => {
    html += "<tr>";
    html += "<td>" + i["id"] + "</td>";
    html += "<td>" + i["EMAIL"] + "</td>";
    html += "</tr>";
  });
  html += '</table>';

  table.innerHTML = html;
}

getData();