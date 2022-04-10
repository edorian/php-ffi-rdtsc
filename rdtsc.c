#if !defined(__x86_64)
#error Only x64_64 archs are supported
#endif

#include <x86intrin.h>

int64_t rdtsc() {
   return __rdtsc();
}
