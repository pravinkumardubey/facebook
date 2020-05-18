/**
 * required validation
 * @param string filedName
 * @param string filedValue
 */

var FieldValidate = {

    required: function (filedName, filedValue) {
        var responseData = {
            success: true,
            message: ''
        };
        if (filedValue == '') {
            responseData.success = false;
            responseData.message = `${filedName} field is required.`;
        }
        return responseData;
    },

    email(filedName, filedValue) {
        var responseData = {
            success: true,
            message: ''
        };
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test(filedValue)) {
            responseData.success = false;
            responseData.message = `${filedName} field must contain a valid email address.`;
        }
        return responseData;
    },

    length(filedName, filedValue, minLength, maxLength) {
        fieldLength = filedValue.length;
        var responseData = {
            success: true,
            message: ''
        };
        if (minLength > 0 && maxLength > 0 && fieldLength < minLength || fieldLength > maxLength) {
            responseData.success = false;
            responseData.message = `${filedName} field must contain ${minLength}-${maxLength} characters in length.`;
        } else if (maxLength > 0 && fieldLength > maxLength) {
            responseData.success = false;
            responseData.message = `${filedName} field must less than ${maxLength} characters in length.`;
        } else if (minLength > 0 && fieldLength < minLength) {
            responseData.success = false;
            responseData.message = `${filedName} field must greater than ${minLength} characters in length.`;
        }
        return responseData;
    },

    number(filedName, filedValue) {
        var responseData = {
            success: true,
            message: ''
        };
        var phoneNumberReg = /^[0-9-+()]*$/;
        if (!phoneNumberReg.test(filedValue)) {
            responseData.success = false;
            responseData.message = `${filedName} field must contain a valid ${filedName}.`;
        }
        return responseData;
    }
};
