def fibonacci(n):
    a, b = 0, 1
    sequence = []
    for _ in range(n):
        sequence.append(a)
        a, b = b, a + b
    return sequence

# Example usage
n_terms = 10
print(f" {n_terms} شرایط: {fibonacci(n_terms)}")
