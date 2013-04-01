function createPrimes (subject)
{
var primes = new Array();
var nonprimes = new Array();
var i=2;
while (i<subject) {
	if (!nonprimes.indexOf(i)) {
		primes.push(i);
		j=2;
		while (((j*i)<subject) && (i<sqrt(subject))) {
			nonprimes.push(i*j);
			j++;
		}
	}
i++;
}
return primes;
}