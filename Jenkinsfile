
pipeline {
	agent any   
	stages {
		stage('Sincronizacion') { // for display purposes
		      // Get some code from a GitHub repository
		      steps {
				git 'https://github.com/masterunir17/appweb.git'
				}		
		   }
		stage('Compilacion') { // Genera los ficheros .class con los fuentes .java
			steps {
			sh 'mvn compile'
			     	}			
			}
		stage('Preparacion') { // en servidor web
			steps {
			// copia de respaldo de la version instalada 
			sh 'ssh root@172.31.57.100 cp -r /var/www/html/ /opt/lastversionweb'
			sh 'ssh root@172.31.57.100 cp -r /var/www/gestion/ /opt/lastversiongestion'
			// eliminar version actual
			// sh 'ssh root@172.31.57.100 rm -r /var/www/html/*'
			// sh 'ssh root@172.31.57.100 rm -r /var/www/gestion/*'
			}		     
		    }

		stage('Despliegue') { // en servidor web
			steps {
			sh 'scp -r gestion/ root@172.31.57.100:/var/www/gestion/'
			sh 'scp -r src/main/webapp/ root@172.31.57.100:/var/www/html/'

			}		     
		    }
		stage('Pruebas Funcionales') { // Ejecuta los comandos de JUnt - Pruebas unitarias
			steps {
			sh 'mvn test'
			}		     
		    }
		stage('Finalizacion') { // Crear el .Jar validado
			steps {
			    sh 'echo Despliegue realizado con exito - QA'
				// sh 'ssh root@172.31.57.100 mkdir -p /var/www/temp_deploy'
				// sh 'scp -r /var/lib/jenkins/workspace/pipetest1/aplicacion/* root@172.31.57.100:/var/www/temp_deploy/'
			   
			}		     
		    }
		}

	}