/*  
 * Code By    : SI - DombaTeam
 * Date Edit  : 17 - 08 - 2022
 * Created With Boostrap 4, And With Love âť¤
 * Contact Person :
                => Email     : master@rlynch.xyz                                
 */

// DARK MODE
localStorage.getItem("mode") === "darkmode"
    ? document.querySelector("#mainContent").classList.add("darkMode")
    : document.querySelector("#mainContent").classList.remove("darkMode");
// BATAS DARK MODE

// LIST MODE
localStorage.getItem("list") === "listmode"
    ? document.querySelector("#mainContent").classList.add("listMode")
    : document.querySelector("#mainContent").classList.remove("listMode");
// BATAS LIST MODE

// MENGAMBIL TAHUN
var d = new Date();
var n = d.getFullYear();
document.getElementById("getYear").innerHTML = n;
// BATAS MENGAMBIL TAHUN
