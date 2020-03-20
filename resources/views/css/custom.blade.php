<style>
.login-bg-custom{
    background-image: url("{{ asset('app/images/ani5/online-payment.png') }}");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.dashboard-bg-custom{
    background-image: url("{{ asset('app/images/bd-23790.jpg') }}");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
}

.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}

.inputfile + label {
    font-size: 1em;
    font-weight: 500;
    color: white;
    background-color: #666464;
    display: inline-block;
    padding: 10px;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: #000;
}

.inputfile + label {
	cursor: pointer; /* "hand" cursor */
}

.inputfile:focus + label {
	outline: 1px dotted #000;
	outline: -webkit-focus-ring-color auto 5px;
}

</style>