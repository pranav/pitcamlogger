default:
	mkdir ./public_html/images
	./start.sh & 

clean:
	rm ./public_html/images/*
	rmdir ./public_html/images
