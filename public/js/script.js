window.addEventListener('DOMContentLoaded', (event) => {
   
		// select input
	const  myIns = document.querySelector('#search')
	const  mySub = document.querySelector('#recherche')

	
	// add event to in 
	
	myIns.addEventListener('input', getIn)
	
	function getIn(e){
		
		let formData = new FormData();

        formData.append('val', e.target.value );	
		
		fetch('php/search.php', {
                        method: 'POST',
                        body: formData,
                    })
					.then(response => response.text())
                    .then(data =>{
						console.log(data);
		
					})
	}
	
})