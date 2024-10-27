<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel = "stylesheet">
    <div class="header">
        <form action="{{route('editNote',['id'=>$note?->id])}}" method="GET">
			@csrf
			@method('GET')
			<button class="my-profile-button1" type="submit">EDIT</button>
		</form>
		<form action="{{route('deleteNote',['id'=>$note?->id])}}" method="POST" onsubmit="return confirm('Are you sure you want to DELETE it?')">
			@csrf
			@method('delete')
			<button class="my-profile-button1" type="submit">DELETE</button>
		</form>
		<form action="{{route('showAllNotes')}}" method="GET" >
			@csrf
			@method('GET')
			<button class="my-profile-button1" type="submit">BACK</button>
		</form>
    </div>
    </div><br>
    <style>
        .header {
			background: #ffffff;
			color: white;
			height: 70px;
			display: flex;
			justify-content: center; /* Center the button horizontally */
			align-items: center;     /* Center the button vertically */
			min-width: 300px;
			margin-left: 80px;
			margin-right:100px;
}
      
        .noted-logo{
			margin-left: 25px;
			font-size: 30px;
  }
        .my-notes-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
      
  }
        .reminder-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
			margin-left: 10px;
      
  }
  
        .task-tracker-button {
			background-color: white;
			color: rgb(0, 0, 0);
			border-color: rgb(0, 0, 0);
			border-style: solid;
			border-width: 1px;
			height: 30px;
			width: 101px;
			border-radius:2px;
			cursor: pointer;
			transition: background-color 0.2s,
			color 0.2s, box-shadow 0.15s;
			margin-left: 10px;
  }

        .my-profile-button {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 38px;
			width: 108px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
  }

		.check-button {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 30px;
			width: 30px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
		}

        .my-profile-button:hover {
      
        	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)
      
  }
        .my-profile-button:active {
        	background-color: gray;
  }

        .my-notes-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .my-notes-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }   

        .reminder-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .reminder-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }

        .task-tracker-button:hover {
			background-color: rgb(37, 37, 37);
			color: white;
			box-shadow: 5px 5px 10px rgba(63, 63, 63, 0.35);

  }
        .task-tracker-button:active {
			opacity: 0.7s;
			background-color: gray;
			border: none;
  }		

  		.check-button:hover {
        	box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)
		}

		.check-button:active {
        	background-color: gray;			
		}

        .bodyclass1 {
            --tw-bg-opacity: 1;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity)) /* #e5e7eb */;
            padding: 1rem /* 16px */;
        }

        .divclass1 {
            min-width: 1024px;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            padding-top: 2rem /* 32px */;
            padding-bottom: 2rem /* 32px */;
            padding-left: 1.5rem /* 24px */;
            padding-right: 1.5rem /* 24px */;
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) /* #ffffff */;
        }

		.my-profile-button1 {
			background-color: rgb(37, 37, 37);
			color: white;
			border: none;
			height: 28px;
			font-size: 12px;
			width: 80px;
			border-radius: 2px;
			cursor: pointer;
			transition: background-color 0.2s,
			box-shadow 0.15s;
			margin-left: 5px;
		}

		.my-profile-button1:hover {
      
			box-shadow: 5px 5px 10px rgba(63,63,63, 0.35)

		}
		.my-profile-button1:active {
			background-color: gray;
		}

    </style>
</head>
<body class = "bodyclass1">
    	<div class="divclass1">
            <div>
                <p class="text-gray-500">
                <div class='flex-1 pr-8'>
                    <h3 class="text-lg font-semibold">
                        {{ $note?->title }}
                    </h3>
                </div>
                <div>
                    <p class="text-gray-500 py-4 flex-1 items-center border-b border-gray-300">
                        {{ $note?->desc}}
                    </p>
                    <br>
                </div>
            </div>
		</div>
            
</body>
</html>