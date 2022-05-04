

window.addEventListener('DOMContentLoaded', (event) => {

	// select input
	const  myIns = document.querySelector('#search')
	const  myLink = document.querySelector("#recherche")
	const  myLinkQ = $("#recherche")
	const  res = document.querySelector('#autocompleteRes')


	myIns.addEventListener('input', getIn)


	function getIn(e){

		res.innerHTML = ''

		let formData = new FormData();

		formData.append('val', e.target.value.toLowerCase());

		fetch("php/search.php", {
			method: 'POST',
			body: formData,
		})
			.then(response => response.json())
			.then(data =>{


				//condition for init list
				if(e.target.value.length > 0 ){
					// get names from obj
					let names = Object.values(data)
					// get ids from obj
					let ids = Object.keys(data)

					let links;
					for(let i=0; i<ids.length;i++){
						let lis = document.createElement('li')
						lis.setAttribute('class','p-1')
						res.appendChild(lis);
						links = document.createElement('a')
						links.setAttribute('class','link-light p-1')
						links.href = 'php/View/element.php/?id=' + ids[i]
						lis.appendChild(links)
						links.innerHTML = names[i];
					}
				}
				myLink.href = 'php/View/recherche.php/?search=' + e.target.value

				$("#search").on('keyup', function (e) {
					if (e.key === 'Enter' || e.keyCode === 13) {
						window.location = 'php/View/recherche.php/?search=' + e.target.value
					}
				});
			})
	}

})

	/*





	// FIRST METHOD


					console.log(data)
				let root = 'recherche.php'

				// let JSONs = data.map( ({}) => ({}) )
				let links = data.map(item => {
					return {
						value: root + item,
						label: item
					};
				});

				$('#search').autocomplete({
					source: links,
					select : function( event, ui ) {
						window.location.href = ui.item.value;
					}
				});

				console.log(links)


	// SECOND METHOD
	
	myIns.addEventListener('input', getIn)
	
	function getIn(e){
		
		let formData = new FormData();

        formData.append('val', e.target.value );	
		
		fetch('php/search.php', {
                        method: 'POST',
                        body: formData,
                    })
					.then(response => response.json())
                    .then(data =>{
						console.log(data);


					})
	}
	*/
