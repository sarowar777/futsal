var locationinfo = {
    Kathmandu: [
        "Naikap",
        "Kalanki",
        "Sitapaila"
    ],
    Lalitpur: [
        "Kupondole",
        "Patan",
        "Pulchwok"
    ],
    Bhaktapur: [
        "Thimi",
        "Lokanthali",
        "Sallaghari"
    ],
    Pokhara: [
        "Lakeside",
        "Prashyang",
        "Malepatan"
    ]

}

window.onload = function () {

    const filterIcon= document.getElementById('filterIcon');
    const filterPanel=document.getElementById('filterpanel')
   

    filterIcon.addEventListener('click',()=>{
        filterPanel.classList.toggle('show');
        console.log('clicked')
       
    })

    // document.addEventListener('click',(event)=>{
    //     if(!filterPanel.contains(event.target)&&!filterIcon.contains(event.target)){
    //         filterPanel.classList.remove("show") 
    //     }
    // })

    const selectdistrict = document.getElementById('district'),
        selectcity = document.getElementById('city'),
        selectdate = document.getElementById('date'),
        selecttime = document.getElementById('time'),
        selects = document.querySelectorAll('select')

    selectcity.disabled = true

    selects.forEach(select => {
        if (select.disabled === true) {
            select.style.cursor = "auto"
        }
        else{
            select.style.cursor="pointer"
        }
    })

    for (let district in locationinfo) {
        console.log(district);
        selectdistrict.options[selectdistrict.options.length]=new Option(district,district);
    }
//------------------For city select---------------//
    selectdistrict.onchange = (e) =>{
        selectcity.disabled=false
        selectcity.length=1
    

    for(let city of locationinfo[e.target.value]){
        console.log(city);
        selectcity.options[selectcity.options.length] = new Option(city, city);     
    }
    }
}

