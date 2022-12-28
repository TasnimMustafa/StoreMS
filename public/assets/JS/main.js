var btn = $("#button");
$(window).scroll(function () {
    if ($(window.screenTop > 400)){
        btn.addClass("show");
    }else{
        btn.removeClass("show");
    }
});

btn.on("click", function (e) {
    e.preventDefault();
    $("html, body").animate({scrollTop:0}, "400");
});

$(".sidebar ul li").on('click',function(){
    $(".sidebar ul li.active").removeClass('active');
    $(this).addClass('active');
});

$(".open-btn").on('click', function () {
    $(".sidebar").addClass('active');
});

$(".close-btn").on('click', function () {
    $(".sidebar").removeClass('active');
});

document.getElementById("logo").src = "../../assets/images/foo_logo.png"
const toggleSwitch = document.getElementById('toggle-switch');
// toggleSwitch.onchange = (e) => {
//     document.documentElement.classList.toggle('dark-mode');
//     // darkMode = localStorage.getItem('darkMode');
//     //
//     //     // if it not current enabled, enable it
//     //     if (darkMode !== 'enabled') {
//     //         enableDarkMode();
//     //         // if it has been enabled, turn it off
//     //     } else {
//     //         disableDarkMode();
//     //     }
// };

function DarkMode() {
    var element = document.documentElement;
    element.classList.toggle("dark-mode");
}

//charts

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['OCT', 'NOV', 'DEC', 'JAN', 'FEB', 'MAR'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx2 = document.getElementById('myChart2').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'polarArea',
    data: {
        labels: ['OCT', 'NOV', 'DEC', 'JAN', 'FEB', 'MAR'],
        datasets: [{
            label: '# of Votes',
            data: [15, 19, 20, 17, 15, 18],
            backgroundColor: [
                'rgba(255, 99, 132, 0.3)',
                'rgba(54, 162, 235, 0.3)',
                'rgba(255, 206, 86, 0.3)',
                'rgba(75, 192, 192, 0.3)',
                'rgba(153, 102, 255, 0.3)',
                'rgba(255, 159, 64, 0.3)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

window.addEventListener("scroll",()=>{
   let content = document.querySelector(".container-scroll");
           let contentPosition = content.getBoundingClientRect().top;
           let screenPosition = window.innerHeight/1.8;

       if(contentPosition < screenPosition){
           content.classList.add("active-scroll");
       }else {
           content.classList.remove("active-scroll");
       }

});



// check for saved 'darkMode' in localStorage
// let darkMode = localStorage.getItem('darkMode');
//
// const darkModeToggle = document.querySelectorAll('#dark-mode-toggle');
//
// const enableDarkMode = () => {
//     // 1. Add the class to the body
//     document.documentElement.classList.toggle('dark-mode');
//     // 2. Update darkMode in localStorage
//     localStorage.setItem('darkMode', 'enabled');
// }
//
// const disableDarkMode = () => {
//     // 1. Remove the class from the body
//     document.documentElement.classList.toggle('dark-mode');
//     // 2. Update darkMode in localStorage
//     localStorage.setItem('darkMode', null);
// }

// If the user already visited and enabled darkMode
// start things off with it on
// if (darkMode === 'enabled') {
//     enableDarkMode();
// }
//
// // When someone clicks the button
//     darkModeToggle.addEventListener('click', () => {
//         // get their darkMode setting
//         darkMode = localStorage.getItem('darkMode');
//
//         // if it not current enabled, enable it
//         if (darkMode !== 'enabled') {
//             enableDarkMode();
//             // if it has been enabled, turn it off
//         } else {
//             disableDarkMode();
//         }
//     });

