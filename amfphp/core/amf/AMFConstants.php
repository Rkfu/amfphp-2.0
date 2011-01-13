<?php
/**
 * constants relative to the AMF format
 *
 * @author Ariel Sommeria-klein
 */
class AMFConstants {
    /**
     * The success method name
     */
    const AMFPHP_CLIENT_SUCCESS_METHOD = "/onResult";
    /**
     * The status method name
     */
    const CLIENT_FAILURE_METHOD = "/onStatus";

    /**
     * used when there is an error and the request response uri is not available
     */
    const DEFAULT_REQUEST_RESPONSE_URI = "/1";
    /**
     * The Content Type String, for use in the headers
     */
    const CONTENT_TYPE = "Content-type: application/x-amf";
    /**
     * this is the field where the class name of an object must be set so that it can be sent as a strongly typed object
     */
    const FIELD_EXPLICIT_TYPE = "_explicitType";

    /**
     * this is the name of the credentials header. can be used for AS3, but is mostly AS2 only
     */
    const CREDENTIALS_HEADER_NAME = "Credentials";

    /**
     * the user id field in the credentials header
     */
    const CREDENTIALS_FIELD_USERID = "userid";

    /**
     * the password field in the credentials header
     */
    const CREDENTIALS_FIELD_PASSWORD = "password";


}
?>