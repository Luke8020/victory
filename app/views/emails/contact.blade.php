<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>
			You have a new message from
			<a href="http://victorygreatdanes.com"> Victory Great Danes</a>
		</h2>

		<div>
			<h3>This message is from:</h3>
			<p>
				&nbsp;&nbsp;<strong>Name:</strong> {{ $name }}<br>
				&nbsp;&nbsp;<strong>Email:</strong> {{ $email }}
			</p>

			<p>
				&nbsp;&nbsp;<strong>Subject:</strong> {{ $subject }}
			</p>
			<p>
				&nbsp;&nbsp;<strong>Message:</strong><br>
				&nbsp;&nbsp;{{ $contactMessage }}
			</p>
			
		</div>
	</body>
</html>
