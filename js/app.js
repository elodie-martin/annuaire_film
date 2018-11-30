console.log("JAVASCRIPT OK");


let grocery = ["coucou", "antonin"];

// The app instance creator
new autoComplete({
	dataSrc: grocery,		  // Array data source
	placeHolder: "Try me...",  	  // Place Holder text
	placeHolderLength: 26,		  // Max placeholder length
	maxResults: 10,		    	  // Max number of results
	highlight: true,	  	  // Highlight matching results	
	dataAttribute: {
		tag: "set",	    	  // Data attribute tag
		value: "value"	    	  // Data attribute value
	},
	onSelection: value => {    	  // Action script onClick event
		document.querySelector(".selection").innerHTML = value.id;
	}
});


