m2:
	docker exec -it m2 bash
redis:
	docker exec -it m2_cache bash
redis-cli:
	docker exec -it m2_cache redis-cli
