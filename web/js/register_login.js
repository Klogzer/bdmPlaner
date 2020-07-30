

function showLogin() {
    document.getElementById("login").style.display = 'block';
    document.getElementById("register").style.display = 'none';
}

function showRegister() {
    document.getElementById("login").style.display = 'none';
    document.getElementById("register").style.display = 'block';
}

function logout() {
    document.getElementById("logout").submit();
}




// this serves only the admin panel
function showItemForm(id) {
    let all = document.getElementsByClassName('newItem');
    Array.from(all).forEach((el) => {
        el.style.display = "none";
    });
    let div = document.getElementById(id);
    div.style.display = "block";
}

function addHelmetRow() {
    let attributes = ["name[]", "type[]", "ap[]", "dp[]", "crit[]", "maxmana[]", "manareg[]", "attsp[]"];
    let thelmet = document.getElementById("helmet_table");
    let row = thelmet.insertRow(thelmet.rows.length);
    attributes.forEach(element => row.insertAdjacentHTML("beforeend", '<td><input type="text" name="' + element + '"></td>'));

}

function addGloveRow() {
    let attributes = ["name[]", "type[]", "ap[]", "dp[]", "maxmana[]", "magreg[]", "attsp[]", "crit[]"];
    let thelmet = document.getElementById("gloves_table");
    let row = thelmet.insertRow(thelmet.rows.length);
    attributes.forEach(element => row.insertAdjacentHTML("beforeend", '<td><input type="text" name="' + element + '"></td>'));
}

function addArmorRow() {
    let attributes = ["name[]", "type[]", "ap[]", "dp[]", "hp[]", "maxmana[]", "magreg[]", "movespeed[]", "manareg[]"];
    let thelmet = document.getElementById("armor_table");
    let row = thelmet.insertRow(thelmet.rows.length);
    attributes.forEach(element => row.insertAdjacentHTML("beforeend", '<td><input type="text" name="' + element + '"></td>'));
}

function addBootsRow() {
    let attributes = ["name[]", "type[]", "ap[]", "dp[]", "movespeed[]", "maxmana[]", "magreg[]", "attsp[]", "crit[]"];
    let thelmet = document.getElementById("boots_table");
    let row = thelmet.insertRow(thelmet.rows.length);
    attributes.forEach(element => row.insertAdjacentHTML("beforeend", '<td><input type="text" name="' + element + '"></td>'));
}

function addSubWeaponRow() {
    let attributes = ["name[]", "type[]", "ap[]", "dp[]", "movespeed[]", "crit[]"];
    let thelmet = document.getElementById("subweapon_table");
    let row = thelmet.insertRow(thelmet.rows.length);
    attributes.forEach(element => row.insertAdjacentHTML("beforeend", '<td><input type="text" name="' + element + '"></td>'));
}

function addMainWeaponRow() {
    let attributes = ["name[]", "type[]", "ap[]", "dp[]", "attsp[]", "crit[]"];
    let thelmet = document.getElementById("weapon_table");
    let row = thelmet.insertRow(thelmet.rows.length);
    attributes.forEach(element => row.insertAdjacentHTML("beforeend", '<td><input type="text" name="' + element + '"></td>'));
}
