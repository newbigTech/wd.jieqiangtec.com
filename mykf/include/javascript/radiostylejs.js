crir = {
	init: function() {
		arrLabels = document.getElementsByTagName('label');
	
		searchLabels:
		for (var i=0; i<arrLabels.length; i++) {			
			// get the input element based on the for attribute of the label tag
			if (arrLabels[i].getAttributeNode('for') && arrLabels[i].getAttributeNode('for').value != '') {
				labelElementFor = arrLabels[i].getAttributeNode('for').value;				
				inputElement = document.getElementById(labelElementFor);
			}
			else {				
				continue searchLabels;
			}	
							
			inputElementClass = inputElement.className;	
		
			// if the input is specified to be hidden intiate it
			if (inputElementClass == 'weboradioHidden') {
				inputElement.className = 'crirHidden';
				
				inputElementType = inputElement.getAttributeNode('type').value;	
				
				// add the appropriate event listener to the input element
				if (inputElementType == "checkbox") {
					inputElement.onclick = crir.toggleCheckboxLabel;
				}
				else {
					inputElement.onclick = crir.toggleRadioLabel;
				}
				
				// set the initial label state
				if (inputElement.checked) {
					if (inputElementType == 'checkbox') { arrLabels[i].className = 'checkbox_checked'}
					else { arrLabels[i].className = 'radio_checked' }
				}
				else {
					if (inputElementType == 'checkbox') { arrLabels[i].className = 'checkbox_unchecked'}
					else { arrLabels[i].className = 'radio_unchecked' }
				}
			}
			else if (inputElement.nodeName != 'SELECT' && inputElement.getAttributeNode('type').value == 'radio') { // this so even if a radio is not hidden but belongs to a group of hidden radios it will still work.
				arrLabels[i].onclick = crir.toggleRadioLabel;
				inputElement.onclick = crir.toggleRadioLabel;
			}
		}			
	},	
	
	findLabel: function (inputElementID) {
		arrLabels = document.getElementsByTagName('label');
	
		searchLoop:
		for (var i=0; i<arrLabels.length; i++) {
			if (arrLabels[i].getAttributeNode('for') && arrLabels[i].getAttributeNode('for').value == inputElementID) {				
				return arrLabels[i];
				break searchLoop;				
			}
		}		
	},	
	
	toggleCheckboxLabel: function () {
		labelElement = crir.findLabel(this.getAttributeNode('id').value);
	
		if(labelElement.className == 'checkbox_checked') {
			labelElement.className = "checkbox_unchecked";
		}
		else {
			labelElement.className = "checkbox_checked";
		}
	},	
	
	toggleRadioLabel: function () {			 
		clickedLabelElement = crir.findLabel(this.getAttributeNode('id').value);
		
		clickedInputElement = this;
		clickedInputElementName = clickedInputElement.getAttributeNode('name').value;
		
		arrInputs = document.getElementsByTagName('input');
	
		// uncheck (label class) all radios in the same group
		for (var i=0; i<arrInputs.length; i++) {			
			inputElementType = arrInputs[i].getAttributeNode('type').value;
			if (inputElementType == 'radio') {
				inputElementName = arrInputs[i].getAttributeNode('name').value;
				inputElementClass = arrInputs[i].className;
				// find radio buttons with the same 'name' as the one we've changed and have a class of chkHidden
				// and then set them to unchecked
				if (inputElementName == clickedInputElementName && inputElementClass == 'crirHidden') {				
					inputElementID = arrInputs[i].getAttributeNode('id').value;
					labelElement = crir.findLabel(inputElementID);
					labelElement.className = 'radio_unchecked';
			        document.getElementById("fss").style.display="none";
				}
			}
		}
	
		// if the radio clicked is hidden set the label to checked
		if (clickedInputElement.className == 'crirHidden') {
			clickedLabelElement.className = 'radio_checked';
			document.getElementById("fss").style.display="none";
		}
	},
	
	addEvent: function(element, eventType, doFunction, useCapture){
		if (element.addEventListener) 
		{
			element.addEventListener(eventType, doFunction, useCapture);
			return true;
		} else if (element.attachEvent) {
			var r = element.attachEvent('on' + eventType, doFunction);
			return r;
		} else {
			element['on' + eventType] = doFunction;
		}
	}
}

crir.addEvent(window, 'load', crir.init, false);