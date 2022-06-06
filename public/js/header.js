window.addEventListener('DOMContentLoaded', (event) => {

    // select input
    const  myInsH = document.querySelector('#searchHeader')
    const  myLinkH = document.querySelector("#rechercheHeader")
    const  res = document.querySelector('#autocompleteHead')


    myInsH.addEventListener('input', getIn)


    function getIn(e){

        res.innerHTML = ''

        let formDataH = new FormData();

        formDataH.append('head', e.target.value.toLowerCase());

        fetch("php/searchHead.php", {
            method: 'POST',
            body: formDataH,
        })
            .then(response => response.json())
            .then(data =>{
        console.log(data)
                //condition for init list
                if(e.target.value.length > 0 ){
                    let names = [];
                    let ids = [];
                    for(let i=0;i<data.length;i++){
                        names.push(Object.values(data[i]))
                        ids.push(Object.keys(data[i]))
                    }
                    console.log(names)
                    let links;
                    for(let i=0; i<ids.length;i++){

                        let lis = document.createElement('li')
                        if(names[i][0][0].toLowerCase() !== e.target.value[0].toLowerCase()){
                            lis.setAttribute('class','p-2')
                        } else {
                            lis.setAttribute('class','shadow card bg-dark p-2')
                        }
                        res.appendChild(lis);
                        links = document.createElement('a')
                        links.setAttribute('class','link-light p-1')
                        links.href = '../../../php/View/element.php/?id=' + ids[i]
                        lis.appendChild(links)
                        if(names[i][0][0].toLowerCase() !== e.target.value[0].toLowerCase()){
                            lis.setAttribute('class','p-2')
                            links.innerHTML = names[i];
                        } else {
                            lis.setAttribute('class','shadow card bg-dark p-2')
                            links.innerHTML = '🟡 ️' + names[i];
                        }
                    }
                }
                myLinkH.href = '../../../php/View/recherche.php/?search=' + e.target.value

                $("#searchHeader").on('keyup', function (e) {
                    if (e.key === 'Enter' || e.keyCode === 13) {
                        window.location = '../../../php/View/recherche.php/?search=' + e.target.value
                    }
                });
            })
    }

})
